<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class customercontroller extends Controller
{
    function edit_customer($id){

        $tampil_pelanggan = DB::table('pelanggan')->where('pelanggan_id', '=', $id)->get();


        return view('edit_customer', ['pelanggan' => $tampil_pelanggan]);
    }

    function proses_update_customer(request $request, $id){

        DB::table('pelanggan')
        ->where('pelanggan_id', '=', $id)
        ->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('/customer');
    }
}
