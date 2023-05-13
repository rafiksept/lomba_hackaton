<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function userView(){
        $users = DB::table('users')->get();
        return view('admin/adminView',  ['users' => $users]);
    }
    public function userUpdate($id){
        $users = DB::table('users') -> where('id', $id) ->get();
        return view('admin/adminUpdate',  ['users' => $users]);
    }
}
