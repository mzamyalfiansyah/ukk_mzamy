<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PDF;


class penjualancontroller extends Controller
{
    function detail_penjualan($id){

        $penjualan = DB::table('penjualan')->where('penjualan_id', $id)->get();
        
        $detail = DB::table('inventory')->where('inventory.penjualan_id', $id)
        ->join('penjualan', 'inventory.penjualan_id', '=', 'penjualan.penjualan_id')
        ->join('produk', 'inventory.produk_id', '=', 'produk.produk_id' )->get();

        $tanggal = date("Y-m-d");
        // return $p;
        

        return view('detail_penjualan', ['penjualan' => $penjualan, 'detail' => $detail, 'tanggal' => $tanggal]);
    }

    function cetak($id){
        

        $penjualan = DB::table('penjualan')->where('penjualan_id', $id)->get();
        
        $detail = DB::table('inventory')->where('inventory.penjualan_id', $id)
        ->join('penjualan', 'inventory.penjualan_id', '=', 'penjualan.penjualan_id')
        ->join('produk', 'inventory.produk_id', '=', 'produk.produk_id' )->get();

        $tanggal = date("Y-m-d");
        // return $p;
        

        return view('cetak', ['penjualan' => $penjualan, 'detail' => $detail, 'tanggal' => $tanggal]);
        
    }
}
