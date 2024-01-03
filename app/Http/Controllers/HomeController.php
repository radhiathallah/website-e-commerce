<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        $merek = Merek::all();
        $keranjang = Keranjang::all();
        $keranjang_user = 
        $id_user = Session::get('id');
        $jumlah = Keranjang::all()->where('id_user',$id_user);
        $carbon = Carbon::now();
        $data = DB::table('keranjangs')
                    ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                    ->where('keranjangs.id_user','=',$id_user)
                    ->sum('harga');
        $data2 = DB::table('keranjangs')
                    ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                    ->where('keranjangs.id_user','=',$id_user)
                    ->orderBy('created_at','DESC');
        return view('welcome',compact('kategori','merek','produk','keranjang','jumlah','data','carbon','data2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function kategori(string $id)
    {
        $kategori = Kategori::all();
        $data3 = Produk::all()->where('id_kategori',$id);
        $kategori1=Kategori::find($id);
        $produk = Produk::all();
        $merek = Merek::all();
        $keranjang = Keranjang::all();
        $keranjang_user = 
        $id_user = Session::get('id');
        $jumlah = Keranjang::all()->where('id_user',$id_user);
        $carbon = Carbon::now();
        $data = DB::table('keranjangs')
                    ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                    ->where('keranjangs.id_user','=',$id_user)
                    ->sum('harga');
        $data2 = DB::table('keranjangs')
                    ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                    ->where('keranjangs.id_user','=',$id_user)
                    ->orderBy('created_at','DESC');
        return view('kategori.index',compact('kategori','merek','produk','keranjang','jumlah','data','carbon','data2','data3','kategori1'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function admin_index()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        $merek = Merek::all();
        $promo = Promo::all();
        $keranjang = Keranjang::all();
        $user = User::all();
        $carbon = Carbon::now();
        return view('admin.home.index',compact('kategori','merek','produk','keranjang','promo','user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
