<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    function halaman_login(){
        return view('login');
    }


    function proses_login(request $request){

    
        $login = $request->only('username', 'password', 'status');

        $petugas = $request->only('status', '=', 'petugas');


            if(Auth::attempt($login)){
                return redirect('dashboard')->with(['id' => '$checklogin->name']);
            }else{
                return redirect('login')->with('error', 'Username atau Password salah');
            }
       
    
    }

    function daftar(){
        return view('daftar');
    }



    function proses_daftar(request $request){

        $isi_nama = $request->nama_lengkap;
        $isi_username = $request-> username;
        $isi_password = $request->password;
        $isi_telp = $request->no_telp;
        $isi_status = $request->status;
        


        DB::table('admin')->insert([
            'nama_lengkap' => $isi_nama,
            'username' => $isi_username,
            'password' => hash::make($isi_password),
            'no_telp' => $isi_telp,
           
            

        ]);
        return redirect('/login');
    }


    public function proseslogout(){
        Auth::logout();
        return redirect('login');
     }

}