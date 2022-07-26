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
            <h1>PROFIL</h1>
        </div>
        <div class="col-4">
            <a href="{{url('/profil')}}" style="text-decoration:none; color:white;">
                <div class="box-profil rounded shadow mt-3">
                    <span>Profil Kami</span>
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
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner-2">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="box-mentri shadow text-center">
                                <img src="{{asset('guest/assets/images/kabinet.png')}}"
                                    style="width:70px; height:60px; margin:auto;" />
                                <h4>Kementrian Pengembangan Minat Bakat Mahasiswa</h4>
                                <p>Kabinet Ruang Temu BEM REMA UNNUR 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center text-light text-ormawa">
        <h1>ORMAWA DAN UKM</h1>
    </div>
</div>
<div class="d-flex justify-content-center text-center mt-2">
    <div class="bg-ormawa shadow">
        <h4>Mau tau ORMAWA dan UKM di Universitas Nurtanio Bandung?</h4>
        <div class="row mt-4">
            <div class="col-2">
                <img src="{{asset('guest/assets/images/logo.png')}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('guest/assets/images/bem-fiki.png')}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('guest/assets/images/LOGO BEM FT.png')}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('guest/assets/images/BEM-FAKULTAS-EKONOMI.png')}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('guest/assets/images/LOGO BEM FISIP.png')}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('guest/assets/images/LOGO FUTSAL UNNUR.png')}}" width="120px" height="120px" />
            </div>
        </div>
        <div class="btn-showall mt-4">
            <a href="{{url('/ormawa')}}">
                <button class="btn shadow">Lihat Selengkapnya <i class="fa-solid fa-angle-right"
                        style="position:relative; top:2px; margin-left:5px;"></i></button>

            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row text-center text-light text-news">
        <h1>NEWS</h1>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center mt-4">
            <div class="col-4 img-news">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-1.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Universitas Nurtanio Bandung Peduli - KKN dan Bakti Sosial</p>
            </div>
            <div class="col-4 img-news">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-2.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Lomba IT Days 2022 BEM Fakultas Ilmu Komputer dan Informatika</p>
            </div>
            <div class="col-4 img-news">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-3.jpeg')}}" alt="Bricks" width="300px"
                            height="380px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>OPREC STAFF NURTANIO ESPORT - Universitas Nurtanio Bandung mengadakan OPREC</p>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="col-4 img-news">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-4.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Accounting Competition - Himpunan Mahasiswa Fakultas Akuntasi</p>
            </div>
            <div class="col-4 img-news">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-5.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Acara Gebyar LLDIKTI WILAYAH 4</p>
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