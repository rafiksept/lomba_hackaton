<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function viewTiket($nomor){
        return view("tiket");
    }
}
