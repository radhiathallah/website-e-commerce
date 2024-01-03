<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merek;
use Illuminate\Validation\Rule;
use Alert;

class MerekController extends Controller
{
    public function index()
    {
        $merek = Merek::all();
        return view('admin.merek.index',compact('merek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('admin.merek.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add(Request $request)
    {
        $merek = Merek::where('nama_merek',$request->nama_merek)->first();
        if($merek){
            Alert::error('Gagal', 'Data merek telah ada');
            return back()->with('gagal','merek telah ada');
        }else{
            $this->validate($request,rules:[
                'cover_merek'=>'required|mimes:jpg,jpeg,png',
            ]);
            $file_name=$request->cover_merek->getClientOriginalName();
            $cover_merek = $request->file('cover_merek')->move('images/cover_merek/',$file_name);
            Merek::create([
                'nama_merek'=>$request->nama_merek,
                'cover_merek'=>$file_name,
            ]);
            Alert::success('Sukses', 'Post Created Successfully');
            return redirect('/merek')->with('sukses','Berhasil menambahkan merek!');
        }
    }

    /**
     * Display the specified resource.
     */

    public function ubah(string $id)
    {
        $merek = Merek::find($id);
        return view('admin.merek.ubah',compact('merek'));
    }

    public function edit(string $id,Request $request)
    {
        $merek = Merek::find($id);
        $this->validate($request,rules:[
            'cover_merek'=>'required|mimes:jpg,jpeg,png',
        ]);
        $file_name=$request->cover_merek->getClientOriginalName();
        $cover_merek = $request->file('cover_merek')->move('images/cover_merek/',$file_name);
        $merek->update([
            'nama_merek'=>$request->nama_merek,
            'cover_merek'=>$file_name,
        ]);
        return redirect('/merek')->with('sukses','Berhasil mengubah data merek!');
    }
}
