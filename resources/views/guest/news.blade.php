@extends('layouts.master_front')
@section('title', 'NEWS - BEM REMA UNNUR - '.$news->judul)
@section('description', 'News - '.$news->judul)
@section('custom-css')
@endsection

@section('content')
<div class="bg-content">
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center news mt-5">
            <h1>{{$news->judul}}</h1>
            <img src="{{asset('database/images/berita/'.$news->gambar_banner)}}" width="500px" height="550px" />
            <h5>{!! $news->deskripsi !!}</h5>
        </div>
    </div>
</div>
@endsection