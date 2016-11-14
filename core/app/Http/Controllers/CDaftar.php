<?php

namespace App\Http\Controllers;

use App\MPoints;
use App\MStudents;
use App\MTeachers;
use App\MUser;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class CDaftar extends Controller
{
    //
    function index(){
        if (Auth::check()) {
            return Redirect::to('beranda');
        }else{
            return view('index');
        }
    }

    function login(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = array(
            'email' => $request['email'],
            'password' => $request['password']
        );

        if (Auth::attempt($user)) {//username dan password sesuai
            return Redirect::to('beranda');
        }else{//username dan password tidak sesuai
            Session::flash('message', 'email atau username dengan password tidak sesuai');
            return Redirect::to('login');
        }
    }

    function logout(){
        Auth::logout();

        return Redirect::to('login');
    }

    function guru(){
        $school = DB::table('schools')
                    ->get();

        return view('daftar_guru')->with('schools',$school);
    }

    function siswa(){
        return view('daftar_siswa');
    }

    function guru_action(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'nama_lengkap' => 'required',
            'kelamin' => 'required',
            'password' => 'required',
            'sekolah' => 'required'
        ]);

        $user = new MUser();
        $user->email = $request['email'];
        $user->username = $request['username'];
        $user->nama_lengkap = $request['nama_lengkap'];
        $user->jenis_kelamin = $request['kelamin'];
        $user->password= bcrypt($request['password']);
        $user->peran= 3;
        $user->save();

        //Ambil id user berdasarkan email
        $ids = DB::table('users')
            ->where('email','=',$request['email'])
            ->get();

        $idf = NULL;
        foreach ($ids as $id) {
            $idf = $id->id;
        }
        $teacher = new MTeachers();
        $teacher->id_user = $idf;
        $teacher->sekolah = $request['sekolah'];
        $teacher->save();

        Auth::attempt(['email' => $request['email'],'username' => $request['username'],'peran' => 3
            ,'password' => $request['password']]);

        return Redirect::to('beranda');
    }

    function siswa_action(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'nama_lengkap' => 'required',
            'kelamin' => 'required',
            'password' => 'required',
            'kode' => 'required'
        ]);

        $cek_kodes = DB::table('classes')//cek kode yang ada pada tabel classes dengan inputan
                    ->where('kode','=',$request['kode'])
                    ->get();

        if(count($cek_kodes) != 0){//ada kode yang sesuai dengan kode yg berada pada tabel classes
            $user = new MUser();
            $user->email = $request['email'];
            $user->username = $request['username'];
            $user->nama_lengkap = $request['nama_lengkap'];
            $user->jenis_kelamin = $request['kelamin'];
            $user->password= bcrypt($request['password']);
            $user->peran= 4;
            $user->save();

            //ambil kelas berdasarkan kode
            $kelas = NULL;
            foreach ($cek_kodes as $cek_kode) {
                $kelas = $cek_kode->id;
            }

            //ambil id user berdasarkan email
            $ids = DB::table('users')
                        ->where('email','=',$request['email'])
                        ->get();

            $idf = NULL;
            foreach ($ids as $id) {
                $idf = $id->id;
            }
            $student = new MStudents();
            $student->id_user = $idf;
            $student->kelas = $kelas;
            $student->save();

            $point = new MPoints();
            $point->id_user = $idf;
            $point->poin = 0;
            $point->save();

            Auth::attempt(['email' => $request['email'],'username' => $request['username'],'peran' => 4
                ,'password' => $request['password']]);

            return Redirect::to('beranda');
        }else{//tidak ada
            Session::flash('message', 'Pastikan kode kelas benar');
            return Redirect::to('daftar/siswa');
        }

    }
}
