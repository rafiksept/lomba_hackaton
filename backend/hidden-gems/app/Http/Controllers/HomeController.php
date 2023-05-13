<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tempatPariwisata;

class HomeController extends Controller
{
    public function home(){
        $tempat_wisatas =  tempatPariwisata::latest()->take(3)->get();

        return view("home", ['tempat_pariwisatas' => $tempat_wisatas]);
    }
}
