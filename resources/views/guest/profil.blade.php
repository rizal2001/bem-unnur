@extends('layouts.master_front')
@section('title', 'PROFIL - BEM REMA UNNUR')
@section('custom-css')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <a style="text-decoration:none; color:white;">
                <div class="box-profil-page rounded shadow">
                    <span>Profil Kami</span>
                </div>
            </a>
        </div>
        <div class="col-15">
            <a style="text-decoration:none; color:white;">
                <div class="text-center mt-3">
                    <h3>
                        Universitas Nurtanio Bandung didirikan pada tanggal 8 September 1999 yang merupakan hasil
                        penggabungan/merger dari Sekolah Tinggi Ilmu Administrasi (STIA) Angkasa yang pada waktu itu
                        bernama Akademi Administrasi Negara (AAN) Angkasa atau yang sekarang menjadi Fakultas
                        Ilmu Sosial dan Ilmu Politik (FISIP) dan Akademi Aeronautika Dirgantara Bandung (AADB)
                        yang sekarang menjadi Fakultas Teknik (FT). Lalu ditambah dengan Fakultas Ekonomi (FE),
                        Fakultas Ilmu Komputer & Informatika (FIKI) dan Sekolah Pascasarjana.
                    </h3>
                </div>
            </a>
            <a style="text-decoration:none; color:white;">
                <div class="text-center mt-3">
                    <h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi consectetur magnam delectus,
                        quisquam reiciendis odio deserunt natus veniam quam, corrupti repudiandae fugiat voluptates
                        minima recusandae id quis neque tempora aperiam.
                    </h3>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="bg-content">
    <img src="{{asset('guest/assets/images/bg.png')}}" />
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda"></div>
            <a style="text-decoration:none; color:white;">
                <div class="box-profil-page rounded shadow">
                    <span>Visi</span>
                </div>
            </a>
        <div class="col-15">
            <a style="text-decoration:none; color:white;">
                <div class="text-center mt-4">
                    <h3>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptatum laborum accusamus, tempora quae maiores totam
                        obcaecati rem maxime nam, rerum nihil expedita,
                        officia ad debitis porro omnis error! Obcaecati, ab?
                    </h3>
            </div>
            </a>
        </div>
        <a style="text-decoration:none; color:white;">
            <div class="box-profil-page rounded shadow mt-5">
                <span>Misi</span>
            </div>
        </a>
        <div class="row justify-content-center">
            <div class="col-4">
                <a style="text-decoration:none; color:white;">
                    <div class="box-profil-page rounded shadow mt-4">
                        <span>1</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt sequi nam quas maxime ea odio, et commodi consequuntur
                            blanditiis illo obcaecati ut sapiente. Dolores, officia facilis
                            eius impedit numquam repellendus!
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a style="text-decoration:none; color:white;">
                <div class="box-profil-page rounded shadow mt-4">
                        <span>2</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt sequi nam quas maxime ea odio, et commodi consequuntur
                            blanditiis illo obcaecati ut sapiente. Dolores, officia facilis
                            eius impedit numquam repellendus!
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a style="text-decoration:none; color:white;">
                <div class="box-profil-page rounded shadow mt-4">
                        <span>3</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt sequi nam quas maxime ea odio, et commodi consequuntur
                            blanditiis illo obcaecati ut sapiente. Dolores, officia facilis
                            eius impedit numquam repellendus!
                        </h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <a style="text-decoration:none; color:white;">
                <div class="box-profil-page rounded shadow mt-4">
                        <span>4</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt sequi nam quas maxime ea odio, et commodi consequuntur
                            blanditiis illo obcaecati ut sapiente. Dolores, officia facilis
                            eius impedit numquam repellendus!
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a style="text-decoration:none; color:white;">
                <div class="box-profil-page rounded shadow mt-4">
                        <span>5</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt sequi nam quas maxime ea odio, et commodi consequuntur
                            blanditiis illo obcaecati ut sapiente. Dolores, officia facilis
                            eius impedit numquam repellendus!
                        </h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <a style="text-decoration:none; color:white;">
            <div class="box-struktur rounded shadow">
                    <span>Struktur Kabinet</span>
                </div>
            </a>
        </div>
        <div class="col-15">
            <div class="center mt-4">
                <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" width="100%" height="620px"
                style="border-radius: 20px" />
            </div>
        </div>
    </div>
</div>

@endsection