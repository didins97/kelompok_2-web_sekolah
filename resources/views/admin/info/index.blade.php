@extends('layouts.backend.app',[
    'title' => 'Manage Agenda',
    'contentTitle' => 'Manage Agenda',
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
          @if ($info->count() == 0)
            <div class="card-header">
              <a href="" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
          @endif
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Email</th>
                  <th>No Tlpn</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php 
                    $no=1;
                  @endphp

                  @foreach($info as $in)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $in->email }}</td>
                    <td>{{ $in->no_telp }}</td>
                    <td>{{ $in->jam_mulai }}</td>
                    <td>{{ $in->jam_selesai }}</td>
                    <td>
                      <div class="row ml-2">
                        <a href="{{ route('admin.info.edit', $in->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
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