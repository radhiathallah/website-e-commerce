<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function daftar()
    {
        return view('daftar.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function proses_login(Request $request)
    {
        $email = $request->email;
        $data = User::where('email',$email)->first();
        if(Auth::attempt($request->only('email','password'))){
            Session::put('id',$data->id);
            Session::put('name',$data->name);
            Session::put('level',$data->level);
            Session::put('email',$data->email);
            Session::put('login',TRUE);
            if($data->level=='admin'){
                return redirect('/admin')->with('sukses','Selamat Datang, '.$data->nama);
            }elseif($data->level=='customer'){
                return redirect('/');
            }
        }
        return redirect('/login')->with('gagal','Data yang anda masukan salah');
    }

    /**
     * Display the specified resource.
     */
    public function proses_daftar(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user){
            Alert::error('gagal','Email telah didaftarkan sebelumnya!');
            return back()->with('gagal','Silahkan memasukan email lainnya');
        }else{
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'level'=>'customer',
            ]);
            Alert::success('Sukses','Berhasil mendaftarkan akun!');
            return redirect('/login')->with('sukses','Silahkan login dengan akun anda!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::success('Berhasil Logout!','Anda telah keluar dari akun');
        return redirect('/login')->with('suskses','Berhasil keluar dari Akun.');
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
