<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function halaman_login(){
        return view('login');
    }


    public function proses_login(request $request){

    
        $login = $request->only("username", "password");
            if(Auth::attempt($login)){
                return redirect('dashboard');
            }else{
                return redirect('login')->with("error", "Username atau Password salah");
            }

    


    }

}
