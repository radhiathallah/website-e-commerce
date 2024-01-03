<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Support\Facades\Session;
use Alert;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function wishlist(string $id,Request $request)
    {
        $id_user = Session::get('id');
        
        Keranjang::create([
            'id_produk'=>$id,
            'id_user'=>$id_user,
        ]);
        Alert::success('Sukses','Berhasil memasukan produk kedalam keranjang.');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
