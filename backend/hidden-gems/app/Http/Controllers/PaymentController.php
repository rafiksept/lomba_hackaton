<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function payment($id, $pax){
        $kegiatans = DB::table('kegiatans')-> where("id", $id) ->get();
       /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
composer require midtrans/midtrans-php
                              
Alternatively, if you are not using **Composer**, you can download midtrans-php library 
(https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
the file manually.   

require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

//SAMPLE REQUEST START HERE

// Set your Merchant Server Key
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
        'gross_amount' => $kegiatans[0] -> harga * 1.02 * $pax,
    ),
    'customer_details' => array(
        'first_name' => 'rafik',
        'last_name' => 'septiana',
        'email' => 'septrafik@gmail.com',
        'phone' => '089672735548',
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);


// return view('checkout', ['kegiatans' => $kegiatans, 'pax' => $pax, 'snapToken' => $snapToken]);
    }
}
