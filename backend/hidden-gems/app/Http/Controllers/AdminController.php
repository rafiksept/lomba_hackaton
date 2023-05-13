<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tempatPariwisata;
use App\Models\Kegiatan;
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

    public function userDeleteAction($id){
        // Menghapus data user dengan id tertentu
        DB::table('tempat_pariwisatas')->where('id', $id)->delete();

        return redirect("/admin/tempat-wisata");
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

        return redirect('/admin/tempat-wisata');

    }
        //kegiatan
        public function userViewKegiatan(){
            $kegiatans = DB::table('kegiatans')->get();
            return view('admin/adminViewKegiatan',  ['kegiatans' => $kegiatans]);
        }
        public function userUpdateKegiatan($id){
            $kegiatans = DB::table('kegiatans') -> where('id', $id) ->get();
            $tempat_wisatas = DB::table('tempat_pariwisatas')->get();
            return view('admin/adminDetailKegiatan',  ['kegiatans' => $kegiatans, 'edited' => true, 'tempat_pariwisatas' => $tempat_wisatas]);
        }
    
        public function userDeleteActionKegiatan($id){
            // Menghapus data user dengan id tertentu
            DB::table('kegiatans')->where('id', $id)->delete();
    
            return redirect("/admin/kegiatan");
        }
    
    
        public function userUpdateActionKegiatan(Request $request, $id){
            $validatedData = $request->validate([
                'name' => ['required'],
                'description' => ['required'],
                'harga' => ['required'],
                'waktu' => ['required'],
                'tempat_pariwisata_id' => ['required'],
                'rating' => ['required']
            ]);
    
            
    
            $kegiatan = Kegiatan::find($id);
            $kegiatan->name =  $request -> input('name');
            $kegiatan->description = $request -> input('description');
            $kegiatan->harga = $request -> input('harga');
            $kegiatan->waktu = $request -> input('waktu');
            $kegiatan->rating = $request -> input('rating');
            $kegiatan->tempat_pariwisata_id = $request -> input('tempat_pariwisata_id');
            if ($request -> image_post){
                $path = $request->file('image_post')->store('public/kegiatan');
                $url = Storage::url($path);
                $file = new File;
                $file->path = $path;
                $file->url = $url;
                $kegiatan->image_post =$file -> path;
            }
            $kegiatan->save();
    
            return redirect('/admin/kegiatan');
        }
        public function userCreateKegiatan(){
            $tempat_wisatas = DB::table('tempat_pariwisatas')->get();
            return view('admin/adminDetailKegiatan' , ['tempat_pariwisatas'=>$tempat_wisatas ,'edited' => false]);
        }
        public function userCreateActionKegiatan(Request $request){
            $validatedData = $request->validate([
                'name' => ['required'],
                'description' => ['required'],
                'harga' => ['required'],
                'waktu' => ['required'],
                'rating' => ['required'],
                'tempat_pariwisata_id' => ['required'],
                'image_post' => ['required']
            ]);
    
            $path = $request->file('image_post')->store('public/kegiatan');
            $url = Storage::url($path);
            $file = new File;
            $file->path = $path;
            $file->url = $url;
    
            Kegiatan::create([
                'name' => $request -> input('name'),
                'description' => $request -> input('description'),
                'harga' => $request -> input('harga'),
                'waktu' => $request -> input('waktu'),
                'rating' => $request -> input('rating'),
                'tempat_pariwisata_id' => $request -> input('tempat_pariwisata_id'),
                'image_post' => $file -> path, 
    
            ]);
    
    
            Session::flash('message1', 'Kegiatan berhasil dikirim!');
    
            return redirect('/admin/kegiatan');
        }
    
}
