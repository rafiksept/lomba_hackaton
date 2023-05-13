<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function userView(){
        $tempat_wisatas = DB::table('tempat_pariwisatas')->get();
        return view('admin/adminView',  ['tempat_wisatas' => $tempat_wisatas]);
    }
    public function userUpdate($id){
        $users = DB::table('tempat_pariwisatas') -> where('id', $id) ->get();
        return view('admin/adminUpdate',  ['tempat_wisatas' => $tempat_wisatas]);
    }
}
