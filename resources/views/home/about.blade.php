@extends('layouts.frontend.app',[
    'title' => 'About',
])
@section('content')
<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <h4>About Us</h4>
                    <p>{{$contact->deskripsi}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop