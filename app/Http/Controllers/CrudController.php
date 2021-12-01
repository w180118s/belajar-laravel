<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    // tampilkan data
    public function index(){
        $data_barang = DB::table('barang')->paginate(3);
        return view('crud', ['data_barang' => $data_barang]);
    }
    //method untuk tambah data
    public function tambah(){
        return view('/crudtambah');
    }

    //method untuk simpan data
    public function simpan(Request $request){
        // dd($request->all());
        DB::insert('insert into barang (kode_barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama_barang]);
        return redirect()->route('cr');
    }

    //method untuk menampilkan edit data

    //method untuk simpan data

    //method untuk hapus data
}

