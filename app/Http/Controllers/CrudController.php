<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    // tampilkan data
    public function index(){
        return view('crud');
    }
    //method untuk tambah data
    public function tambah(){
        return view('/crudtambah');
    }

    //method untuk simpan data
    public function simpan(Request $request){
        // dd($request->all());
        DB::insert('insert into barang (kode-barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama_barang]);
    }

    //method untuk menampilkan edit data

    //method untuk simpan data

    //method untuk hapus data
}

