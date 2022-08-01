@extends('layouts.master_front')
@section('title', 'PROFIL - BEM REMA UNNUR')
@section('custom-css')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <div class="box-profil-page shadow">
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
            <div class="box-visi shadow">
                <span>Visi</span>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center text-visi mt-4">
                <h4>" {{$kabinet->visi}} "</h4>
            </div>
        </div>

        <div class="box-profil-page shadow mt-5">
            <span>Misi</span>
        </div>
        <div class="row justify-content-center">
            @foreach ($kabinet->misi as $row)
            <div class="col-12 col-xl-4">
                <div class="box-misi shadow mt-4">
                    <span>{{$row->judul}}</span>
                </div>
                <div class="text-misi text-center mt-3">
                    <h5>" {{$row->deskripsi}} "
                        <h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <div class="box-struktur shadow">
                <span>Struktur Kabinet</span>
            </div>
        </div>
        <div class="col-12">
            <div class="img-struktur text-center shadow mt-4">
                <img src="{{asset('database/images/kabinet/struktur/'.$kabinet->gambar_struktur)}}" width="100%"
                    height="1000px" style="border-radius: 20px" />
            </div>
        </div>
    </div>
</div>

@endsection