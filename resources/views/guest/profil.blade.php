@extends('layouts.master_front')
@section('title', 'PROFIL - BEM REMA UNNUR')
@section('description', 'Profil')
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
                <h4>Badan Eksekutif Mahasiswa Republik Mahasiswa Universitas Nurtanio Bandung merupakan organisasi
                    mahasiswa intra kampus yang merupakan lembaga eksekutif pada tingkat universitas. BEM REMA UNNUR
                    bertugas untuk mengkoordinasi seluruh organisasi mahasiswa dalam lingkungan mahasiswa di Universitas
                    Nurtanio Bandung melalui berbagai program kerja. Disisi lain harus menjalankan tugas sebagai organ
                    pendidik dan mengkader sebagai upaya menjaga stabilitas organisasi dan menciptakan ruang-ruang
                    produktif bagi mahasiswa.</h4>
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
                @if (is_null($kabinet))
                <h4>" Belum Memiliki Visi "</h4>
                @else
                <h4>" {{$kabinet->visi}} "</h4>
                @endif
            </div>
        </div>

        <div class="box-profil-page shadow mt-5">
            <span>Misi</span>
        </div>
        <div class="row justify-content-center">
            @if (is_null($kabinet))
            <div class="text-center text-visi mt-4">
                <h4>" Belum Memiliki Misi "</h4>
            </div>
            @else
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
            @endif
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
            @if (is_null($kabinet))
            <div class="text-center text-visi mt-4">
                <h4>" Belum Memiliki Struktur Kabinet "</h4>
            </div>
            @else
            <div class="img-struktur text-center shadow mt-4">
                <img src="{{asset('database/images/kabinet/struktur/'.$kabinet->gambar_struktur)}}" width="100%"
                    height="100%" />
            </div>
            @endif
        </div>
    </div>
</div>

@endsection