@extends('layouts.backend.app',[
    'title' => 'Edit info',
    'contentTitle' => 'Edit info'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
@endpush

@section('content')
<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.info.update', $info->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="judul">Email</label>
                <input required="" value="{{ $info->email }}" required="" type="" name="email" id="judul" placeholder="" class="form-control title"> 
            </div>
            <div class="form-group">
                <label for="judul">No Telepon</label>
                <input required="" value="{{ $info->no_telp }}" required="" type="" name="no_telp" id="judul" placeholder="" class="form-control title"> 
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="jam_mulai">Jam Mulai</label>
                        <input required="" value="{{ $info->jam_mulai }}" type="time" name="jam_mulai" id="jam_mulai" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="jam_selesai">Jam Selesai</label>
                        <input required="" value="{{ $info->jam_selesai }}" type="time" name="jam_selesai" id="jam_selesai" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="deskripsi">Alamat</label>
                <textarea required="" name="alamat" id="deskripsi" class="text-dark form-control">{!! $info->alamat !!}</textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote">{!! $info->deskripsi !!}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>    
            </div> 
        </div>
        </form>
    </div>
</div>
@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height:500,
        callbacks: {
        // callback for pasting text only (no formatting)
            onPaste: function (e) {
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              bufferText = bufferText.replace(/\r?\n/g, '<br>');
              document.execCommand('insertHtml', false, bufferText);
            }
        }
    })

    $(".summernote").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });
</script>
@endpush