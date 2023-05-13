<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoCollection extends Model
{
    use HasFactory;

    protected $fillable =[
        'image_post',
        'tempat_pariwisata_id'
    ];
    
    public function tempatPariwisata(){
        return $this->belongsTo(tempatPariwisata::class);
    }
}
