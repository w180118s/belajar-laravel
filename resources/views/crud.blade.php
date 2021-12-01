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
            <a href="{{route('cr.t')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
            <hr>
            <table class="table table-striped table-bordered table-sm">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Action</th>
                </tr>
                @foreach ($data_barang as $no => $data)
                <tr>
                    <td>{{ $data_barang->firstitem()+$no }}</td>
                    <td>{{ $data->kode_barang }}</td>
                    <td>{{ $data->nama_barang }}</td>
                    <td>
                        <a href="#" class="badge badge-success">Edit</a>
                        <a href="#" class="badge badge-danger swal-confirm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $data_barang->links() }}
        </div>
    </div>
</div>
@endsection
@push('page-script')
<script src="{{ asset('/assets/js/page/modules-sweetalert.js') }}"></script>
@endpush
@push('page-after-script')
<script>
    $(".swal-confirm").click(function() {
        swal({
            title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
            swal('Poof! Your imaginary file has been deleted!', {
              icon: 'success',
            });
            } else {
            swal('Your imaginary file is safe!');
            }
          });
      });
</script>
@endpush
