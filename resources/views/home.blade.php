{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="card">
    <div class="card">
        <div class="card-header">
          <h4>Example Card</h4>
        </div>
        <div class="card-body">
          <h3>hai <b>{{ session('username')}}</b>. ini adalah halaman khusus siswa </h3>
        </div>
        <div class="card-footer bg-whitesmoke">
          This is card footer
        </div>
      </div>
    </div>
</div>

@endsection
