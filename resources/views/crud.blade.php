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
                        <a href="{{ route('cr.d',$data->id) }}" data-id="{{ $data->nama_barang }}" class="badge badge-danger swal-confirm">
                        {{-- <form action="{{ route('cr.d',$data->id) }}" id="delete{{ $data->id }}" method="POST">
                        @csrf
                        @method('delete')
                        </form>
                         --}}
                            Delete
                        </a>
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
<script src="{{ asset('/assets/js/page/sweetalert2.js') }}"></script>
@endpush
@push('page-after-script')
<script>
    $(".swal-confirm").click(function(event) {
        event.preventDefault()
        id = event.target.dataset.id;
        Swal.fire({
            title: 'Yakin ingin menghapus barang ' +id +'?',
            text: 'Barang yang sudah dihapus tidak dapat dikembalikan lagi',
            icon: 'warning',
            showCancelButton:true
          })
          .then((result) => {
                if (result.isConfirmed) {
                    window.location.href = $(this).attr('href')
                }
          });
      });
</script>
@endpush
