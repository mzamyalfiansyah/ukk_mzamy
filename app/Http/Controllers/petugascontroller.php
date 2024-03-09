<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class petugascontroller extends Controller
{

    function dashboard_petugas(){

        return view('dashboard_petugas');
    }






    function petugas(){

        $petugas = DB::table('admin')->where('status', '=', 'petugas')->get();

        return view('petugas', ['petugas' => $petugas]);
    }

    function tambah_petugas(request $request){

        $password = $request->password;

        DB::table('admin')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => hash::make($password),
            'no_telp' => $request->no_telp,
            'status' => 'petugas'
        ]);

        return redirect()->back();
    }

    function edit_petugas($id){

        $petugas = DB::table('admin')->where('id', '=', $id)->get();

        return view('edit_petugas', ['petugas' => $petugas]);
    }

    function proses_update_petugas(request $request, $id){

        DB::table('admin')
        ->where('id', '=', $id)
        ->update([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/petugas');
    }
}
