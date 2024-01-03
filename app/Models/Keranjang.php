<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $fillable = [
        'id_produk','id_user'
    ];
    public function produk(){
        return $this->belongsTo('App\Models\Produk','id_produk'); 
    }
    public function user(){
        return $this->belongsTo('App\Models\User','id_user'); 
    }
    use HasFactory;
}
