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
            <form action="{{ route('cr.u',$data->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label @error('kode_barang')
                                class="text-danger"
                            @enderror>Kode Barang @error('kode_barang')
                                {{ $message }}
                            @enderror</label>
                            <input type="text" name="kode_barang"
                            @if (old('kode_barang'))
                                value="{{ old('kode_barang') }}"
                            @else
                                value="{{$data->kode_barang}}"
                            @endif
                            class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label @error('nama_barang')
                                class="text-danger"
                            @enderror>Nama Barang @error('nama_barang')
                                {{ $message }}
                            @enderror</label>
                            <input type="text" name="nama_barang"
                            @if (old('nama_barang'))
                                value="{{ old('nama_barang') }}"
                            @else
                                value="{{$data->nama_barang}}"
                            @endif
                            class="form-control">
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
