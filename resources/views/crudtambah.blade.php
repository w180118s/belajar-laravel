@extends('layouts.master')
@section('title', 'Data Barang')
@section('card-title','Tambah Barang')
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header p-2 pl-3">
          <h4 class="card-title">@yield('card-title')</h4>
        </div>
        <div class="card-body">
            {{-- <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
            </div> --}}
            <form action="{{ route('cr.s') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" name="kode_brang" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_brang" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <button class="btn btn-success mr-2">
                            Simpan
                        </button>
                        <a href="/crud" class="btn btn-danger">
                            Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
