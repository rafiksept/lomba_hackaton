<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempatPariwisata extends Model
{
    use HasFactory;

    protected $fillable =['name','description','desa','kota','provinsi','longitude','latitude','jenis','image_post','updated_at','created_at'];
}
