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
}

