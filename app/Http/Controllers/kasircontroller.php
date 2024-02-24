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

        $penjualan = DB::table('penjualan')->get();
        $total_penjualan= count($penjualan);

        $pelanggan = DB::table('pelanggan')->get();
        $total_pelanggan = count($pelanggan);



        $januari = DB::table('penjualan')->whereMonth('created_at', '=', '01')->get();
        $tampil_januari= count($januari);

        $februari = DB::table('penjualan')->whereMonth('created_at', '=', '02')->get();
        $tampil_februari = count($februari);

        $maret = DB::table('penjualan')->whereMonth('created_at', '=', '03')->get();
        $tampil_maret = count($maret);

        $april = DB::table('penjualan')->whereMonth('created_at', '=', '04')->get();
        $tampil_april = count($april);

        $mei = DB::table('penjualan')->whereMonth('created_at', '=', '05')->get();
        $tampil_mei= count($mei);
        

        // $harga = DB::table('produk')->get('harga');
        // $total_harga = collect($harga)->sum('harga');


    
        return view('dashboard', ['jumlah_admin' => $jumlah_admin, 'total_penjualan' => $total_penjualan, 'total_pelanggan' => $total_pelanggan,

                                    // tampil grafik
                                    'tampil_januari' => $tampil_januari,
                                    'tampil_februari' => $tampil_februari,
                                    'tampil_maret' => $tampil_maret,
                                    'tampil_april' => $tampil_april,
                                    'tampil_mei' => $tampil_mei,]);
    }

    function proses_cart($id){
        

        return view('order', []);
    }

    function data_barang(){

        $produk = DB::table('produk')->where('status', '=' ,'tersedia')->get();

        $produk_dihapus = DB::table('produk')->where('status', '=' ,'dihapus')->get();
    
        return view('data_produk',  ['tampil_produk' => $produk, 'produk_dihapus' => $produk_dihapus]);
       
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
    


    function order(request $request){
        

        $produk = DB::table('produk')->where('status', '=', 'tersedia')->get();
        $pelanggan = DB::table('pelanggan')->get();
        $penjualan = DB::table('penjualan')->latest()->first();

        // $id = $pelanggan->pelanggan_id = 0;

        $id_jual = '';

        if(!$penjualan){
            $id_jual = '1';
        }else{
            if($penjualan->status == "selesai"){
                $id_jual = $penjualan->penjualan_id + 1;
            }else{
                $id_jual = $penjualan->penjualan_id;
            }
        }

        $inventory = DB::table('inventory')->where('penjualan_id', $id_jual)
        ->join('produk', 'inventory.produk_id', '=', 'produk.produk_id')->get();

        // $harga = DB::table('inventory')->get('total');
        // $total_harga = collect($harga)->sum('total');

        

      


        return view('order', ['tampil_produk' => $produk, 'tampil_inventory' => $inventory, 
                    'pelanggan' => $pelanggan,'id_jual' => $id_jual,  'tampil_penjualan' => $penjualan]);
        
        
    }

   
    function checkout(request $request){

        $produk = DB::table('produk')->where('produK_id', $request->produk_id)->first();

        $update_stok = DB::table('produk')->where('produk_id', $request->produk_id)->update([
            'stok' => $request->stok - $request->qty
        ]);

        $update_data = DB::table('penjualan')->where('penjualan_id', $request->penjualan_id)->update([
            'status' => 'selesai',
            'total_harga' => $request->total_harga,
            'pelanggan_id' => $request->pelanggan_id

            
        ]);

        

        return redirect()->back();
    }

    function delete_inventory(request $request, $id){
        // $request->stok;
        // $request->qty;
        //  return $request->all();
        // $produk = DB::table('produk')->get();

        // $jumlah = sum($request->stok, $request->qty);
       
        // $update = DB::table('produk')->where('produk_id', $request->produk_id)->update([
        //     'stok' => $jumlah
        // ]);

            $hapus = DB::table('inventory')->where('inventory_id','=', $id)->delete();
        

        

      
            return redirect()->back();
    }


    function keranjang(request $request){

        $produk = DB::table('produk')->where('produK_id', $request->produk_id)->first();
        // return $request->all();

        $data_penjualan = DB::table('penjualan')->where('penjualan_id', $request->penjualan_id)->first();
        if(!$data_penjualan){
            $penjualan = DB::table('penjualan')->insert([
                'penjualan_id' => $request->penjualan_id,
                'tanggal_penjualan' => date('Y-m-d'),
                'total_harga' => 0,
                'pelanggan_id' => 2547,
                'status' => 'di proses'
            ]);
        } if($produk->stok - $request->qty < 0){
            
            return redirect()->back()->with("error", "Stok tidak mencukupi");
        
        }else{
            $detail_penjualan = DB::table('inventory')->insert([
                'produk_id' => $request->produk_id,    
                'penjualan_id' => $request->penjualan_id,
                'qty' => $request->qty,
                'total_harga' => $request->qty * $produk->harga
            ]);
        }

        
        
    
        

       

        return redirect()->back();

    }





    

 


    function proses_hapus($id){
        DB::table('produk')->where('produk_id', '=', $id)->update([
            'status' => 'dihapus'
        ]);
        
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
        $jumlah = count($customer);

        return view('customer', ['tampil_pelanggan' => $customer, 'jumlah' => $jumlah]);
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

        // $harga = DB::table('inventory')->get('total');
        // $total_harga = collect($harga)->sum('total');

        return view('penjualan', ['penjualan' => $tampil_penjualan]);
    }







  
    
}
