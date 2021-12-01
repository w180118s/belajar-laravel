<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

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
        $validation = $request->validate([
            'kode_barang' => 'required|max:10|numeric',
            'nama_barang' => 'required|max:10'
        ],[
            'kode_barang.required' => 'kode barang harus di isi',
            'kode_barang.max' => 'kode barang maksimal 10',
            'kode_barang.max' => 'kode barang maksimal 10',
            'nama_barang.required' => 'nama barang harus di isi',
            'nama_barang.max' => 'nama barang maksimal 10',
        ]);


        DB::insert('insert into barang (kode_barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama_barang]);
        return redirect()->route('cr')->with('message','Data Berhasil Disimpan');
    }

    //method untuk menampilkan edit data


    //method untuk simpan data

    //method untuk hapus data
    public function delete($id){
        // echo $id;
        DB::table('barang')->where('id',$id)->delete();

        return redirect()->back()->with('message','Data Berhasil Dihapus');
    }
}

