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
        <div class="col-12">
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
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
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
                    <h3>" Mewujudkan Badan Ekseskutif Mahasiswa Universitas Nurtanio Bandung yang Aktif dalam membangun sinergitas untuk Universitas Nurtanio Bandung dengan dedikasi tinggi berdasarkan Tri Dharma Perguruan Tinggi "</h3>
                </div>
            </a>
        </div>
        <a style="text-decoration:none; color:white;">
            <div class="box-profil-page rounded shadow mt-5">
                <span>Misi</span>
            </div>
        </a>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4">
                <a style="text-decoration:none; color:white;">
                    <div class="box-misi rounded shadow mt-4">
                        <span>Pembentukan Karakter</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>Merangkul Mahasiswa/i Universitas Nurtanio untuk meningkatkan Iman & Takwa kepada Tuhan YME</h5>
                    </div>
                </a>
            </div>
            <div class="col-12 col-xl-4">
                <a style="text-decoration:none; color:white;">
                <div class="box-misi rounded shadow mt-4">
                        <span>Koordinasi</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>Menjalin komunikasi intensif dengan pimpinan Universitas untuk Nurtanio yg lebih berkembang lagi kedepannya</h5>
                    </div>
                </a>
            </div>
            <div class="col-12 col-xl-4">
                <a style="text-decoration:none; color:white;">
                <div class="box-misi rounded shadow mt-4">
                        <span>Pendidikan dan Pengajaran</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>Mewujudkan keorganisasian yang berintergritas dan profesional dengan etos kerja tinggii<h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4">
                <a style="text-decoration:none; color:white;">
                <div class="box-misi rounded shadow mt-4">
                        <span>Pengabdian Kepada Masyarakat</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>Membangun kontribusi dan peran aktif mahasiswa Universitas Nurtanio baik didalam maupun diluar kampus</h5>
                    </div>
                </a>
            </div>
            <div class="col-12 col-xl-4"> 
                <a style="text-decoration:none; color:white;">
                <div class="box-misi rounded shadow mt-4">
                        <span>Penelitian dan Pengembangan</span>
                    </div>
                    <div class="text-center mt-3">
                        <h5>Mengedepankan sigergitas dalam pengembangan potensi minat dan bakat Universitas Nurtanio</h5>
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
        <div class="col-12">
            <div class=" img-struktur text-center shadow mt-4">
                <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" width="100%" height="620px"
                    style="border-radius: 20px" />
            </div>
        </div>
    </div>
</div>

@endsection