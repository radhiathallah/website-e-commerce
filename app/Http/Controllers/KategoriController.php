<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Validation\Rule;
use Alert;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('admin.kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add(Request $request)
    {
        $kategori = Kategori::where('nama_kategori',$request->nama_kategori)->first();
        if($kategori){
            Alert::error('Gagal', 'Data kategori telah ada');
            return back()->with('gagal','Kategori telah ada');
        }else{
            $this->validate($request,rules:[
                'cover'=>'required|mimes:jpg,jpeg,png',
            ]);
            $file_name=$request->cover->getClientOriginalName();
            $cover = $request->file('cover')->move('images/cover/',$file_name);
            Kategori::create([
                'nama_kategori'=>$request->nama_kategori,
                'cover'=>$file_name,
            ]);
            Alert::success('Sukses', 'Post Created Successfully');
            return redirect('/kategori')->with('sukses','Berhasil menambahkan kategori!');
        }
    }

    /**
     * Display the specified resource.
     */

    public function ubah(string $id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.ubah',compact('kategori'));
    }

    public function edit(string $id,Request $request)
    {
        $kategori = Kategori::find($id);
        $this->validate($request,rules:[
            'cover'=>'required|mimes:jpg,jpeg,png',
        ]);
        $file_name=$request->cover->getClientOriginalName();
        $cover = $request->file('cover')->move('images/cover/',$file_name);
        $kategori->update([
            'nama_kategori'=>$request->nama_kategori,
            'cover'=>$file_name,
        ]);
        return redirect('/kategori')->with('sukses','Berhasil mengubah data kategori!');
    }

    /**
     * Show the form for editing the specified resource.
     */

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
        $kategori = Kategori::find($id);
        
        if($kategori){
            $kategori->delete();
            Alert::success('Sukses','Berhasil menghapus data!');
            return back()->with('sukses','Data kategori berhasil dihapus!');
        }else{
            Alert::error('Gagal','Gagal menghapus data!');
            return back()->with('gagal','Data gagal dihapus');
        }
    }
}
