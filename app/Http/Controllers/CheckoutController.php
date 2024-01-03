<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Keranjang;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DB;
use Alert;

class CheckoutController extends Controller
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
        $id_user = Session::get('id');
        $jumlah = Keranjang::all()->where('id_user',$id_user);
        $id_user = Session::get('id');
        $carbon = Carbon::now();
        $data = DB::table('keranjangs')
                    ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                    ->where('keranjangs.id_user','=',$id_user)
                    ->sum('harga');
        $data2 = DB::table('keranjangs')
                    ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                    ->where('keranjangs.id_user','=',$id_user)
                    ->get();
        return view('checkout.index',compact('kategori','merek','produk','keranjang','jumlah','data','data2','carbon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function hapus_cart(String $id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->delete();
        Alert::success('Sukses','Berhasil menghapus produk pada keranjang');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
