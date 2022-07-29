@extends('layouts.master_front')
@section('title', 'ORMAWA - BEM REMA UNNUR')
@section('custom-css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
<script src="https://kit.fontawesome.com/b31e06099e.js" crossorigin="anonymous"></script>

@endsection

@section('content')
<div class="ormawa">
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" width="100%" height="580px"
        style="filter:brightness(25%);" />
    <div class="caption"><span style="color:#FBD442;">ORMAWA</span><br />Organisasi Mahasiswa Universitas Nurtanio
        Bandung</div>
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
        <div class="col-6 col-xl-3 img-ormawa img-circle">
            <img src="{{asset('guest/assets/images/logo.png')}}" width="150px" height="150px" />
            <h5>Badan Eksekutif Mahasiswa Republik Mahasiswa Universitas Nurtanio Bandung</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-ormawa">
            <h1>BEM FAKULTAS</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/bem-fiki.png')}}" width="150px" height="150px" />
            <h5>Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer & Informatika Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO BEM FT.png')}}" width="150px" height="150px" />
            <h5>Badan Eksekutif Mahasiswa Fakultas Teknik Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/BEM-FAKULTAS-EKONOMI.png')}}" width="150px" height="150px" />
            <h5>Badan Eksekutif Mahasiswa Fakultas Ekonomi Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO BEM FISIP.png')}}" width="150px" height="150px" />
            <h5>Badan Eksekutif Mahasiswa Fakultas Ilmu Sosial & Ilmu Politik Universitas Nurtanio Bandung</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-ormawa">
            <h1>HIMA</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO HIMA FIKI.png')}}" width="150px" height="150px" />
            <h5>Himpunan Mahasiswa Fakultas Ilmu Komputer & Informatika Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO HIMA TEKNIK PENERBANGAN.png')}}" width="150px" height="150px" />
            <h5>Himpunan Mahasiswa Fakultas Teknik Penerbangan Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO HIMA TEKNIK ELEKTRO.png')}}" width="150px" height="150px" />
            <h5>Himpunan Mahasiswa Fakultas Teknik Elekto Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO HIMA MANAJEMEN.png')}}" width="150px" height="150px" />
            <h5>Himpunan Mahasiswa Fakultas Manajemen Universitas Nurtanio Bandung</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-ormawa">
            <h1>UKM</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO UAC.png')}}" width="150px" height="150px" />
            <h5>Unnur Aeromodelling Club Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO GAD.png')}}" width="150px" height="150px" />
            <h5>Gema Aero Dirgantara Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO LDK DAMAI.png')}}" width="150px" height="150px" />
            <h5>Dewan Mahasiswa Islam Universitas Nurtanio Bandung</h5>
        </div>
        <div class="col-6 col-xl-3 img-ormawa">
            <img src="{{asset('guest/assets/images/LOGO PMK.png')}}" width="150px" height="150px" />
            <h5>Persekutuan Mahasiswa Kristen Universitas Nurtanio Bandung</h5>
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