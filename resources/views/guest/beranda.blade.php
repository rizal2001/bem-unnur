@extends('layouts.master_front')
@section('title', 'BEM REMA UNNUR - KABINET HUGO ELECTRA')
@section('custom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
<script src="https://kit.fontawesome.com/b31e06099e.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="icon-slider owl-theme owl-carousel slider-1 mt-5">
    <div class="carousel-inner">
        <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" width="100%" height="620px"
            style="filter:brightness(25%);" />
        <div class="caption">Selamat Datang di Website BEM REMA UNNUR 2022 KABINET HUGO ELECTRA</div>

    </div>
    <div class="carousel-inner">
        <img src="{{asset('guest/assets/images/beranda-2.jpeg')}}" width="100%" height="620px"
            style="filter:brightness(25%);" />
        <div class="caption">Selamat Datang di Website BEM REMA UNNUR 2022 KABINET HUGO ELECTRA</div>
    </div>
    <div class="carousel-inner">
        <img src="{{asset('guest/assets/images/beranda-3.jfif')}}" width="100%" height="620px"
            style="filter:brightness(25%);" />
        <div class="caption">Selamat Datang di Website BEM REMA UNNUR 2022 KABINET HUGO ELECTRA</div>
    </div>
</div>

<div class="bg-content">
    <img src="{{asset('guest/assets/images/bg.png')}}" />
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <h1>Profil Kami</h1>
        </div>
        <div class="col-4">
            <a href="{{url('/profil')}}" style="text-decoration:none; color:white;">
                <div class="box-profil rounded shadow mt-3">
                    <span>PROFIL</span>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="{{url('/profil')}}" style="text-decoration:none; color:white;">
                <div class="box-profil rounded shadow mt-3">
                    <span>Visi & Misi</span>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="{{url('/profil')}}" style="text-decoration:none; color:white;">
                <div class="box-profil rounded shadow mt-3">
                    <span>Struktur Kabinet</span>
                </div>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <h1>KEMENTERIAN</h1>
        </div>
        <div class="col-10">
            <div class="box-kementerian rounded shadow text-center mt-3">
                <h3>Badan Eksekutif Mahasiswa Universitas Nurtanio Bandung Memiliki 10 Kementrian</h3>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="icon-slider owl-theme owl-carousel slider-2 mt-5">
                <div class="carousel-inner-2">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner-2">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri text-center">
                                <p>aku</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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