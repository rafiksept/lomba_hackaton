<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;

    protected $fillable =[
        'kombinasi_produk',
        'user_id'
    ];
    
    public function User(){
        return $this->belongsTo(User::class);
    }
}
