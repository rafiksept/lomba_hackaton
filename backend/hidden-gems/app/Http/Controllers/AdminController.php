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
        $tempat_wisatas = DB::table('tempat_pariwisatas') -> where('id', $id) ->get();
        return view('admin/adminDetail',  ['tempat_wisatas' => $tempat_wisatas, 'edited' => true]);
    }


    public function userUpdateAction(Request $request, $id){
        $validatedData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'desa' => ['required'],
            'kota' => ['required'],
            'provinsi' => ['required'],
            'location_map' => ['required']
        ]);

        

        $tempat_wisata = tempatPariwisata::find($id);
        $tempat_wisata->name =  $request -> input('name');
        $tempat_wisata->description = $request -> input('description');
        $tempat_wisata->desa = $request -> input('desa');
        $tempat_wisata->kota = $request -> input('kota');
        $tempat_wisata->provinsi = $request -> input('provinsi');
        $tempat_wisata->location_map = $request -> input('location_map');
        if ($request -> image_post){
            $path = $request->file('image_post')->store('public/tempatWisata');
            $url = Storage::url($path);
            $file = new File;
            $file->path = $path;
            $file->url = $url;
            $tempat_wisata->image_post =$file -> path;
        }
        $tempat_wisata->save();

        return redirect('/admin/tempat-wisata');
    }
    public function userCreate(){

        return view('admin/adminDetail' , ['edited' => false]);
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

        $path = $request->file('image_post')->store('public/tempatWisata');
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
