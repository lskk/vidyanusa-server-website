<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class CAuthenticated extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $user = Auth::user();
        //Penampilan beranda berdasarkan perannya
        switch ($user->peran){
            case 3://guru
                return "Dash guru";
                ;break;
            case 4://siswa

                return view('authenticated.siswa.beranda');
                ;break;
        }

    }

    function gallery(){
        return view('authenticated/galeri');
    }

    function profile(){
        return view('authenticated/profil');
    }
}
