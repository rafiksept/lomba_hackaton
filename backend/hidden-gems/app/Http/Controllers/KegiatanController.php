<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Chart;


class KegiatanController extends Controller
{
    public function kegiatanView($id){
        if (isset($_GET['sort_by'])) {
            // Do something when the 'parameter_name' parameter is present in the URL
            $sort_by = $_GET['sort_by'];
        } else {
            // Do something else when the 'parameter_name' parameter is not present in the URL
            return redirect('/kegiatan/'.$id.'?sort_by=harga');
        }

        if ($sort_by == "harga" or $sort_by == "rating") {
            $kegiatans = DB::table('kegiatans')-> where("tempat_pariwisata_id", $id) -> orderBy($sort_by, 'asc') ->get();
            $tempat_pariwisata = DB::table('tempat_pariwisatas')-> where("id", $id) ->get();
            return view("kegiatan", ['kegiatans' => $kegiatans, 'tempat_pariwisata' => $tempat_pariwisata]);
        } else {
            redirect('/kegiatan/{id}?sort_by=harga');
        }

        
    }

    public function keranjangView(){
        $userId = Auth::id();
        $charts = DB::table('charts')-> where("user_id", $userId) ->get();
        $produks = explode(",", $charts[0] -> kombinasi_produk);
        $counts = array_count_values($produks);
        $keys = array_keys($counts);

        $produkChart= DB::table('kegiatans')
            ->whereIn('id', $keys)
            ->get();

        return view("keranjang",['charts' => $produkChart, 'count' => $counts]);
    }
    public function keranjangAction($id){
        $userId = Auth::id();
        $charts = DB::table('charts')-> where("user_id", $userId) ->get();

        if (!empty($charts[0])) {
            $chart_update = Chart::find($charts[0] -> id);
            
            $chart_update -> kombinasi_produk =  $chart_update -> kombinasi_produk.$id.",";  
            $chart_update -> save();
        } else {
            Chart::create([
                'kombinasi_produk' => $id.",",
                'user_id' => $userId
            ]);
        }

        return redirect("/keranjang");

        }


    public function checkout($id, $pax){
        $userId = Auth::id();
        $kegiatans = DB::table('kegiatans')-> where("id", $id) ->get();

        \Midtrans\Config::$serverKey = 'SB-Mid-server-OrWZfsAupKLjLdnjmUk8tF3P';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000,
    ),
    'customer_details' => array(
        'first_name' => 'rafik',
        'last_name' => 'septiana',
        'email' => 'septrafik@gmail.com',
        'phone' => '089672735548',
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('checkout', ['kegiatans' => $kegiatans,'pax' => $pax, 'snapToken' => $snapToken]);
    }
}
