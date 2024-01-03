<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama_produk','deskripsi','foto_produk','jumlah_produk','harga','id_kategori','id_merek',
    ];
    public function kategori() {
        return $this->belongsTo('App\Models\Kategori','id_kategori');
    }
    public function merek() {
        return $this->belongsTo('App\Models\Merek','id_merek');
    }
    public function keranjang(){
        return $this->hasMany('App\Models\Keranjang','id_produk'); 
    }
    public function promo(){
        return $this->belongsTo('App\Models\Promo','id_promo'); 
    }
    use HasFactory;
}
