<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    public function kegiatanView($id){
        $kegiatans = DB::table('kegiatans')-> where("tempat_pariwisata_id", $id) ->get();
        $tempat_pariwisata = DB::table('tempat_pariwisatas')-> where("id", $id) ->get();
        return view("kegiatan", ['kegiatans' => $kegiatans, 'tempat_pariwisata' => $tempat_pariwisata]);
    }

    public function keranjangView(){
        return view("keranjang");
    }
}
