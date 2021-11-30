@extends('layouts.master')
@section('title', 'Data Barang')
@section('card-header','Tabel Barang')
@section('content')
<div class="card">
    <div class="card">
        <div class="card-header p-2 pl-3">
          <h4 class="card-title">@yield('card-header')</h4>
        </div>
        <div class="card-body">
            <a href="/crud/tambah" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
        </div>
    </div>
</div>

@endsection
