<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class kasircontroller extends Controller
{
    function dashboard(){

        
        $admin = DB::table('admin')->get();
        $jumlah_admin = count($admin);

        $penjualan = DB::table('pelanggan')->get();
        $total_penjualan= count($penjualan);

        $pelanggan = DB::table('pelanggan')->get();
        $total_pelanggan = count($pelanggan);

        // $harga = DB::table('produk')->get('harga');
        // $total_harga = collect($harga)->sum('harga');


    
        return view('dashboard', ['jumlah_admin' => $jumlah_admin, 'total_penjualan' => $total_penjualan, 'total_pelanggan' => $total_pelanggan]);
    }

    function proses_cart($id){
        

        return view('order', []);
    }

    function data_barang(){

        $produk = DB::table('produk')->get();

    
        return view('data_produk',  ['tampil_produk' => $produk]);
       
    }


    function proses_barang(request $request){

      

        $nama_produk = $request->nama_produk;
        $harga = $request->harga;
        $stok = $request->stok;

        DB::table('produk')->insert([
        
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'stok' => $stok
           
        ]);
        return redirect('/data_produk');
    }
    


    function order(){
        

        $produk = DB::table('produk')->get();

        $inventory = DB::table('inventory')
        ->join('produk', 'inventory.produk_id', '=', 'produk.produk_id')
        ->select('inventory.inventory_id','inventory.produk_id','produk.nama_produk', 'produk.harga', 'inventory.qty', 'inventory.total', 'inventory.tgl' )->get();

        $harga = DB::table('inventory')->get('total');
        $total_harga = collect($harga)->sum('total');

        return view('order',  ['tampil_produk' => $produk, 'tampil_inventory' => $inventory, 'total_harga' => $total_harga]);
        
        
    }

    function proses_order(request $request, $id){

        $produk_id = $request->produk_id;
        $nama_produk = $request->nama_produk;
        $tgl = $request->tgl;
        $harga = $request->harga;
        $qty = $request->qty;
        $total = $request->total;
        $pelanggan_id = $request->id_pelanggan;

        DB::table('penjualan')->insert([
            
            'produk_id' => $produk_id,
            'nama_produk' => $nama_produk,
            'tanggal_penjualan' => $tgl,
            'harga' => $harga,
            'qty' => $qty,
            'total_harga' => $total,
            'pelanggan_id' => $pelanggan_id

        ]);

        DB::table('inventory')->delete();

        return redirect('penjualan');
    }


    function keranjang(request $request, $id){

        $produk_id = $request->produk_id;
        $qty = $request->qty;
        $total = $request->total;
        $date = now()->format('Y-m-d');

        $p = DB::table('produk')->where('produk_id', $produk_id)->first();

       
        DB::table('inventory')->insert([
        
            'produk_id' => $produk_id,

            'qty' => $qty,
            'total' => $qty * $p->harga,
            'tgl' => $date
           
        ]);
        return redirect('/order');

    }

    

    

    function tampilcart($id){

        

        return view('layout/tampilcart', []);

        
    }


    function proses_hapus($id){
        DB::table('produk')->where('produk_id', '=', $id)->delete();
        
        return redirect()->back();
    }
    
    

    function detail_produk($id){
        $produk = DB::table('produk')->where('produk_id', '=', $id)->get();

        return view('detail', ['detail_produk' => $produk]);
    }


    function proses_update_produk(request $request, $id){

        $nama_produk = $request->nama_produk;
        $harga = $request->harga;
        $stok = $request->stok;


        DB::table('produk')
        ->where('produk_id', '=', $id)
        ->update([
            'nama_produk' => $request->nama_produk, 
            'harga' => $request->harga, 
            'stok' => $request->stok]);

        return redirect('data_produk');
    }



    function tampil_customer(){

        $customer = DB::table('pelanggan')->get();

        return view('customer', ['tampil_pelanggan' => $customer]);
    }

    function proses_customer(request $request){

        $nama_pelanggan = $request->nama_pelanggan;
        $alamat = $request->alamat;
        $no_telepon = $request->no_telepon;


        DB::table('pelanggan')->insert([
            'nama_pelanggan' => $nama_pelanggan,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon
            
            
        ]);
        return redirect()->back();
    }

    function penjualan(){

        $tampil_penjualan = DB::table('penjualan')->get();

        return view('penjualan', ['penjualan' => $tampil_penjualan]);
    }







  
    
}
