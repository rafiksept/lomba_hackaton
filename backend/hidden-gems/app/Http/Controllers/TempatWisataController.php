<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TempatWisataController extends Controller
{
    public function viewTempatWisata(){
        $tempat_pariwisatas = DB::table('tempat_pariwisatas')->get();
        return view('tempatWisata1', ['tempat_pariwisatas' => $tempat_pariwisatas]);
    }
}
