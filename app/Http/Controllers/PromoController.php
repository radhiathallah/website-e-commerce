<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Promo;
use Alert;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $promo = Promo::all();
        return view('promo.index',compact('promo','produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        return view('promo.tambah',compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        $id_produk = $input['id_produk'];
        $produk=implode(',',$id_produk);
        $this->validate($request,rules:[
            'cover'=>'required|mimes:jpg,jpeg,png',
        ]);
        $file_name=$request->cover->getClientOriginalName();
        $cover = $request->file('cover')->move('images/cover_promo/',$file_name);
        $promo = Promo::insertGetId([
            'nama_promo'=>$request->nama_promo,
            'diskon'=>$request->diskon,
            'tanggal_berakhir'=>$request->tanggal_berakhir,
            'cover'=>$file_name,
            'deskripsi'=>$request->deskripsi,
            'id_produk'=>$produk,
        ]);
        foreach($id_produk as $id){
            $produk = Produk::where('nama_produk',$id);
            $produk->update([
                'id_promo'=>$promo,
            ]);
        }
        Alert::success('Sukses','Promo berhasil ditambahkan!');
        return back()->with('sukses','Promo berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function produk(string $id)
    {
        $promo = Promo::find($id);
        $produk = Produk::all()->where('id_promo',$id);
        return view('promo.produk_promo',compact('promo','produk'));
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
