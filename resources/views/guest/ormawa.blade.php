@extends('layouts.master_front')
@section('title', 'ORMAWA - BEM REMA UNNUR')
@section('description', 'Ormawa')
@section('custom-css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
<script src="https://kit.fontawesome.com/b31e06099e.js" crossorigin="anonymous"></script>

@endsection

@section('content')
<div class="ormawa">
    @if (is_null($background))
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" width="100%" height="600px"
        style="filter:brightness(25%);" />
    <div class="caption"><span style="color:#FBD442;">ORMAWA</span><br />Organisasi Mahasiswa Universitas Nurtanio
        Bandung</div>
    @else
    <img src="{{asset('database/images/background/'.$background->gambar)}}" width="100%" height="600px"
        style="filter:brightness(25%);" />
    <div class="caption"><span style="color:#FBD442;">ORMAWA</span><br />Organisasi Mahasiswa Universitas Nurtanio
        Bandung</div>
    @endif

</div>

<div class="bg-content">
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 title-ormawa">
            <h1>BEM UNIVERSITAS</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($bemuniv as $row)
        <div class="col-6 col-xl-3 img-ormawa img-circle">
            <object data="{{asset('database/images/ormawa/'.$row->gambar)}}" width="150px" height="150px"> </object>
            <h5>{{$row->nama}}</h5>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-ormawa">
            <h1>BEM FAKULTAS</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($bemfa as $row)
        <div class="col-6 col-xl-3 img-ormawa">
            <object data="{{asset('database/images/ormawa/'.$row->gambar)}}" width="150px" height="150px"> </object>
            <h5>{{$row->nama}}</h5>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-ormawa">
            <h1>HIMA</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($hima as $row)
        <div class="col-6 col-xl-3 img-ormawa">
            <object data="{{asset('database/images/ormawa/'.$row->gambar)}}" width="150px" height="150px"> </object>
            <h5>{{$row->nama}}</h5>
        </div>
        @endforeach

    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-ormawa">
            <h1>UKM</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($ukm as $row)
        <div class="col-6 col-xl-3 img-ormawa">
            <object data="{{asset('database/images/ormawa/'.$row->gambar)}}" width="150px" height="150px"> </object>
            <h5>{{$row->nama}}</h5>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(".icon-slider").owlCarousel({
    items: 1,
    margin: 18,
    nav: true,
    navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"]
});
</script>
@endsection