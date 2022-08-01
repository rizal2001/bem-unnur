@extends('layouts.master_front')
@section('title', 'PROFIL - BEM REMA UNNUR')
@section('custom-css')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <div class="box-profil-page rounded shadow">
                <span>Profil Kami</span>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center text-profil-page mt-3">
                <h4>Universitas Nurtanio Bandung didirikan pada tanggal 8 September 1999 yang merupakan hasil
                    penggabungan/merger dari Sekolah Tinggi Ilmu Administrasi (STIA) Angkasa yang pada waktu itu
                    bernama Akademi Administrasi Negara (AAN) Angkasa atau yang sekarang menjadi Fakultas
                    Ilmu Sosial dan Ilmu Politik (FISIP) dan Akademi Aeronautika Dirgantara Bandung (AADB)
                    yang sekarang menjadi Fakultas Teknik (FT). Lalu ditambah dengan Fakultas Ekonomi (FE),
                    Fakultas Ilmu Komputer & Informatika (FIKI) dan Sekolah Pascasarjana.</h4>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi consectetur magnam delectus,
                    quisquam reiciendis odio deserunt natus veniam quam, corrupti repudiandae fugiat voluptates
                    minima recusandae id quis neque tempora aperiam.</h4>
            </div>
        </div>
    </div>
</div>

<div class="bg-content">
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="box-visi rounded shadow">
                <span>Visi</span>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center text-visi mt-4">
                <h4>" Mewujudkan Badan Ekseskutif Mahasiswa Universitas Nurtanio Bandung yang Aktif dalam
                    membangun
                    sinergitas untuk Universitas Nurtanio Bandung dengan dedikasi tinggi berdasarkan Tri Dharma
                    Perguruan Tinggi "</h4>
            </div>
        </div>

        <div class="box-profil-page rounded shadow mt-5">
            <span>Misi</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4">
                <div class="box-misi rounded shadow mt-4">
                    <span>Pembentukan Karakter</span>
                </div>
                <div class="text-misi text-center mt-3">
                    <h5>Merangkul Mahasiswa/i Universitas Nurtanio untuk meningkatkan Iman & Takwa kepada Tuhan
                        YME
                    </h5>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="box-misi rounded shadow mt-4">
                    <span>Koordinasi</span>
                </div>
                <div class="text-misi text-center mt-3">
                    <h5>Menjalin komunikasi intensif dengan pimpinan Universitas untuk Nurtanio yg lebih
                        berkembang
                        lagi kedepannya</h5>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="box-misi rounded shadow mt-4">
                    <span>Pendidikan dan Pengajaran</span>
                </div>
                <div class="text-misi text-center mt-3">
                    <h5>Mewujudkan keorganisasian yang berintergritas dan profesional dengan etos kerja tinggii
                        <h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4">
                <div class="box-misi rounded shadow mt-4">
                    <span>Pengabdian Kepada Masyarakat</span>
                </div>
                <div class="text-misi text-center mt-3">
                    <h5>Membangun kontribusi dan peran aktif mahasiswa Universitas Nurtanio baik didalam maupun
                        diluar kampus</h5>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="box-misi rounded shadow mt-4">
                    <span>Penelitian dan Pengembangan</span>
                </div>
                <div class="text-misi text-center mt-3">
                    <h5>Mengedepankan sigergitas dalam pengembangan potensi minat dan bakat Universitas Nurtanio
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <div class="box-struktur rounded shadow">
                <span>Struktur Kabinet</span>
            </div>
        </div>
        <div class="col-12">
            <div class="img-struktur text-center shadow mt-4">
                <img src="{{asset('guest/assets/images/STRUKTUR-ORGA-UNNUR-2019-scaled.jpg')}}" width="100%" height="1000px"
                    style="border-radius: 20px" />
            </div>
        </div>
    </div>
</div>

@endsection