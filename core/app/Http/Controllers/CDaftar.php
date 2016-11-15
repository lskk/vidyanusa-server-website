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
use Illuminate\Support\Facades\Input;
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

    function ubah_profile(Request $request){
        $this->validate($request,[
            "nama_lengkap" => "required",
            "biografi" => "required"
        ]);

        $user = Auth::user();

        $ubah = DB::table('users')
            ->where('id', $user->id)
            ->update(['nama_lengkap' => $request['nama_lengkap'],'bio' => $request['biografi']]);

        if($ubah){
            Session::flash('message', 'Berhasil mengubah data profil');
            return Redirect::to('profil');
        }else{
            Session::flash('message', 'Terjadi kesalahan');
            return Redirect::to('profil');
        }
    }

    public function random_string($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    function ubah_photo(Request $request){
        $this->validate($request,[
            "photo" => 'required|mimes:jpg,jpeg,png|Max:300'
        ]);

        $rename_berkas = $this->random_string(50) . '.' . Input::file('photo')->getClientOriginalExtension();

        $ftp_server = "167.205.7.228";
        $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

        $login = ftp_login($ftp_conn, "ftpmanager", "Sabuga@123");

        if (true === $login) {

            ftp_put($ftp_conn, "/Assets/VidyaNusa/A/" . $rename_berkas, Input::file('photo')->getPathName(), FTP_BINARY);
            ftp_close($ftp_conn);


        } else {
            ftp_close($ftp_conn);
        }

        $user = Auth::user();

        DB::table('users')
            ->where('id', $user->id)
            ->update(['foto_profil' => 'http://167.205.7.228:8089/VidyaNusa/A/' . $rename_berkas]);


        return Redirect::to('profil');

    }
}
