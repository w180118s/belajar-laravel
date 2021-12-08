<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataSiswa extends Controller
{
    public function profile(){
        $id = session('id');
        $data = DB::table('siswas')->where('id', $id)->first();
        // dd($data);
        return view('siswa/profile', ['data'=>$data]);
    }
}
