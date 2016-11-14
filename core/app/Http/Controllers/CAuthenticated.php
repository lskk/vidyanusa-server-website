<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CAuthenticated extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('authenticated/beranda');
    }

    function gallery(){
        return view('authenticated/galeri');
    }

    function profile(){
        return view('authenticated/profil');
    }
}
