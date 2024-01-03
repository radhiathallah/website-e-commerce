<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DB;
use Alert;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        $kategori= Kategori::all();
        $merek= Merek::all();
        return view('admin.produk.tambah',compact('kategori','merek'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add(Request $request)
    {
            // $this->validate($request,rules:[
            //     'foto_produk'=>'required|mimes:jpg,jpeg,png',
            // ]);
            
            // if($request->hasFile('foto_produk')){
            //     $allowedfileExtension=['pdf','jpg','png','docx'];
            //     $files = $request->file('foto_produk');
            //     foreach($files as $file){
            //         $filename = $file->getClienOriginalName();
            //         $extension = $file->getClientOriginalExtension();
            //         $check = in_array($extension,$allowedfileExtension);
            //         if($check){
            //             $items = Produk::create($request->all());
            //             foreach($request->foto_produk as $foto){
            //                 $filename = $file->getClienOriginalName();
            //                 $foto_produk = $request->file('foto_produk')->move('images/foto_produk/',$filename);
            //                 Produk::create([
            //                     'nama_produk'=>$request->nama_produk,
            //                     'deskripsi'=>$request->deskripsi,
            //                     'foto_produk'=>$filename,
            //                     'jumlah_produk'=>$request->jumlah_produk,
            //                     'harga'=>$request->harga,
            //                     'id_kategori'=>$request->id_kategori,
            //                     'id_merek'=>$request->id_merek,
            //                 ]);
            //                 Alert::success('Sukses','Berhasil menambahkan data produk!');
            //                 return redirect('/produk')->with('sukses','Data produk berhasil ditambahkan!');
            // //             }
            // //         }
            // //         Alert::error('Gagal','Data gagal dimasukan!');
            // //         return back()->with('gagal','Data gagal dimasukan!');
            // //     }
            // // }
            
        $produk = Produk::where('nama_produk',$request->nama_produk)->first();
        if($produk){
            Alert::error('Gagal', 'Data produk telah ada');
            return back()->with('gagal','Silahkan masukan produk lainnya!');
        }elseif(!$produk){
            $this->validate($request,rules:[
                'foto_produk'=>'required|mimes:jpg,jpeg,png',
            ]);
            $file_name=$request->foto_produk->getClientOriginalName();
            $foto_produk = $request->file('foto_produk')->move('images/foto_produk/',$file_name);
            Produk::create([
                'nama_produk'=>$request->nama_produk,
                'deskripsi'=>$request->deskripsi,
                'foto_produk'=>$file_name,
                'jumlah_produk'=>$request->jumlah_produk,
                'harga'=>$request->harga,
                'id_kategori'=>$request->id_kategori,
                'id_merek'=>$request->id_merek,
            ]);
            
            Alert::success('Sukses', 'Berhasil menambahkan data produk!');
            return redirect('/produk')->with('sukses','Berhasil menambahkan produk!');
        }else{
            Alert::error('Gagal','Data gagal ditambahkan!');
            return back()->with('gagal','Data gagal ditambahkan!');
        }


    //     $produk = Produk::where('nama_produk',$request->nama_produk)->first();
    //     if($produk){
    //         Alert::error('Gagal', 'Data produk telah ada');
    //         return back()->with('gagal','Silahkan masukan produk lainnya!');
    //     }elseif(!$produk){
    //     $foto_produk = array();
    //     if($files= $request->file('foto_produk')){
    //         foreach($files as $file){
    //             $file_name = md5(rand(1000,10000));
    //             $ext = strtolower($file->getClientOriginalExtension());
    //             $image_full_name = $file_name.'.'.$ext;
    //             $upload_path = 'public/foto_produk/';
    //             $image_url = $upload_path.$image_full_name;
    //             $file->move($upload_path,$image_full_name);
    //             $foto_produk[] = $image_url;
    //         }
    //     }
    //     Produk::create([
    //                 'nama_produk'=>$request->nama_produk,
    //                 'deskripsi'=>$request->deskripsi,
    //                 'foto_produk'=>implode('|',$foto_produk),
    //                 'jumlah_produk'=>$request->jumlah_produk,
    //                 'harga'=>$request->harga,
    //                 'id_kategori'=>$request->id_kategori,
    //                 'id_merek'=>$request->id_merek,
    //             ]);
    //             Alert::success('Sukses', 'Berhasil menambahkan data produk!');
    //             return redirect('/produk')->with('sukses','Berhasil menambahkan produk!');
    // }
    // Alert::error('Gagal','Data gagal ditambahkan!');
    // return back()->with('gagal','Data gagal ditambahkan!');
}

    /**
     * Display the specified resource.
     */

    public function ubah(string $id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.ubah',compact('produk'));
    }

    public function edit(string $id,Request $request)
    {
        $produk = Produk::find($id);
        $this->validate($request,rules:[
            'cover'=>'required|mimes:jpg,jpeg,png',
        ]);
        $file_name=$request->cover->getClientOriginalName();
        $cover = $request->file('cover')->move('images/cover/',$file_name);
        $produk->update([
            'nama_produk'=>$request->nama_produk,
                    'deskripsi'=>$request->deskripsi,
                    'foto_produk'=>$file_name,
                    'jumlah_produk'=>$request->jumlah_produk,
                    'harga'=>$request->harga,
                    'id_kategori'=>$request->id_kategori,
                    'id_merek'=>$request->id_merek,
        ]);
        return redirect('/produk')->with('sukses','Berhasil mengubah data produk!');
    }
    public function detail(string $id){
        $kategori = Kategori::all();
        $produk = Produk::find($id);
        $merek = Merek::all();
        $keranjang = Keranjang::all();
        $id_user = Session::get('id');
        $jumlah = Keranjang::all()->where('id_user',$id_user);
        $carbon = Carbon::now();
        $produk2 = Produk::all();
        $data = DB::table('keranjangs')
                    ->join('produks', 'produks.id', '=', 'keranjangs.id_produk')
                    ->where('keranjangs.id_user','=',$id_user)
                    ->sum('harga');
        return view('detail.index',compact('kategori','merek','produk','keranjang','jumlah','data','carbon','produk2'));
        
    }
    public function destroy(string $id){
        $produk = Produk::find($id);
        if($produk){
            $produk->delete();
            Alert::success('Sukses','Berhasil mengahapus data produk!');
            return back()->with('sukses','Data produk telah dihapus!');
        }else{
            Alert::error('Gagal','Gagal meghahapus data produk!');
            return back()->with('gagal','Data produk gagal dihapus!');
        }
        
    }
}
