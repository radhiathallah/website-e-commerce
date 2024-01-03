<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    protected $fillable = [
        'nama_merek','cover_merek'
    ];
    public function produk(){
        return $this->hasMany('App\Models\Produk','id_merek');
    }
    use HasFactory;
}
