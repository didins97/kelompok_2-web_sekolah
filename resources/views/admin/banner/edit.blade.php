@extends('layouts.backend.app',[
    'title' => 'Tambah Agenda',
    'contentTitle' => 'Tambah Agenda'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.banner.index') }}" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" action="{{ route('admin.banner.update', $banner->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input required="" type="" name="judul" value="{{ $banner->judul}}" id="judul" placeholder="" class="form-control title"> 
            </div>
            <div class="form-group">
                <label for="judul">Buton Text</label>
                <input required="" type="" name="btn_txt" id="button" placeholder="" value="{{ $banner->btn_txt}}" class="form-control title"> 
            </div>
            <div class="form-group">
                <label>Thumbnail</label>
                <input type="file" name="file"class="dropify form-control" value="{{$banner->img}}" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" data-default-file="{{ asset('uploads/img/banner/'.$banner->img) }}"> 
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPLOAD</button>    
            </div> 
        </div>
        </form>
    </div>
</div>
@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
        $('.dropify').dropify({
        messages: {
            default: 'Drag atau Drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });
</script>
@endpush