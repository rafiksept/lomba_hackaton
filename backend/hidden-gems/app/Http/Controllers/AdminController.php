<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tempatPariwisata;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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

    public function userCreate(){
        return view('admin/adminDetail');
    }
    public function userCreateAction(Request $request){
        $validatedData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'desa' => ['required'],
            'kota' => ['required'],
            'provinsi' => ['required'],
            'location_map' => ['required'],
            'image_post' => ['required']
        ]);

        $path = $request->file('image_post')->store('public/fakultas');
        $url = Storage::url($path);
        $file = new File;
        $file->path = $path;
        $file->url = $url;

        tempatPariwisata::create([
            'name' => $request -> input('name'),
            'description' => $request -> input('description'),
            'desa' => $request -> input('desa'),
            'kota' => $request -> input('kota'),
            'provinsi' => $request -> input('provinsi'),
            'location_map' => $request -> input('location_map'),
            'image_post' => $file -> path, 

        ]);


        Session::flash('message1', 'Tempat pariwisata berhasil dikirim!');

        return view('admin/adminDetail');
    }
}
