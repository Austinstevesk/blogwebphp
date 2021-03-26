<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __constructor(){
        this->middleware('auth');
    }

    //logout
    public function logout(Request $request){
        auth()->logout();
        return redirect()->route('home');
    }

}

