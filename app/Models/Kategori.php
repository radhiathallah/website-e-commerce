<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable =[
        'nama_kategori','cover',
    ];
    public function produk() {
        return $this->hasMany('App\Models\Produk','id_kategori');
    }
    use HasFactory;
}
