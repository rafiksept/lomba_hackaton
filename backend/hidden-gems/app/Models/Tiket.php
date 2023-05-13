<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable =[
        'nomor_tiket',
        'nama',
        'harga',
        'jumlah_tiket',
        'user_id',
        'tempat_pariwisata_id'
    ];
    
    public function tempatPariwisata(){
        return $this->belongsTo(tempatPariwisata::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }



}
