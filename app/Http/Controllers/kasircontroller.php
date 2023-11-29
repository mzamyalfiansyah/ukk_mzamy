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
        return view('dashboard');
    }

    function data_barang(){
        return view('data_produk');
    }


    
    

    
}
