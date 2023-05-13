<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userView(){
        return view('admin/adminView');
    }
}
