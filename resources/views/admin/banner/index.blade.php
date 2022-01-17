@extends('layouts.backend.app',[
    'title' => 'Manage Banner',
    'contentTitle' => 'Manage Banner',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
          @if ($banner->count() == 0)
            <div class="card-header">
              <a href="{{ route('admin.banner.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
          @endif
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Button Text</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $no=1;
                @endphp

                @foreach($banner as $bn)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $bn->judul }}</td>
                  <td>{{ $bn->btn_txt }}</td>
                  
                  <td>
                    <div class="row ml-2">
                        <a href="{{ route('admin.banner.edit',$bn->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>

                        {{-- <form method="POST" action="{{ route('admin.banner.destroy',$bn->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                        </form> --}}
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
  });
</script>
@endpush