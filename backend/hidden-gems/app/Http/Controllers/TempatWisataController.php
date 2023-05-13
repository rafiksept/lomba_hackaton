<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TempatWisataController extends Controller
{
    public function viewTempatWisata(){
        $tempat_wisatas = DB::table('tempat_pariwisatas')->get();
        dump($tempat_wisatas);
    }
}
