<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi/login');
    }

    public function login(Request $request){
        // dd($request->all());
        $user = User::where('email', $request->email)->first();
        $siswa = Siswa::where('email', $request->email)->first();
        $data = false;
        $type = null;
        if ($user) {
            $data = $user;
            $type = 'user';
        } else if($siswa) {
            $data = $siswa;
            $type = 'siswa';
        }

        if ($data){
            $nama = ucwords($data->name);
            if(Hash::check($request->password, $data->password)){
                session([
                    'berhasil'  => true,
                    'username'  => $data->name,
                    'type'      => $type,
                    'id'        => $data->id,
                ]);
                return redirect('/dashboard');
            } else {
                return redirect('/')->with('message',"Hallo $nama, password anda salah");
            }
        } else {
            return redirect('/')->with('message','Email atau Password Salah');
        }

        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
            // echo "ini halaman dashboard"
        // }
    }

    public function logout(Request $request){
        $request->session()->flush();
        // Auth::logout();
        return redirect('/');
    }
}
