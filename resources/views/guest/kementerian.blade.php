@extends('layouts.master_front')
@section('title', 'KEMENTERIAN - BEM REMA UNNUR')
@section('description', 'Kementerian')
@section('custom-css')

@endsection

@section('content')
<div class="kementerian">
    @if (is_null($background))
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" width="100%" height="600px"
        style="filter:brightness(25%);" />
    <div class="caption"><span style="color:#FBD442;">KEMENTERIAN</span><br />Badan Eksekutif Mahasiswa Republik
        Mahasiswa Universitas Nurtanio Bandung</div>
    @else
    <img src="{{asset('database/images/background/'.$background->gambar)}}" width="100%" height="600px"
        style="filter:brightness(25%);" />
    <div class="caption"><span style="color:#FBD442;">KEMENTERIAN</span><br />Badan Eksekutif Mahasiswa Republik
        Mahasiswa Universitas Nurtanio Bandung</div>
    @endif
</div>

<div class="bg-content">
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
</div>
<div class="container">
    <div class="row mt-4">
        @foreach ($topMan as $row)
        <div class="col-12 col-md-6 col-xl-6 text-light text-center img-menteri">
            <a href="{{url($row->link_medsos)}}" target="_blank">
                <object data="{{asset('database/images/kementerian/'.$row->gambar)}}" width="500px" height="500px">
                </object>
            </a>
            <h4>{{$row->nama}}</h4>
            <h4>{{$row->nama_fakultas}}</h4>
            <h4>{{$row->nama_jabatan}}</h4>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-unit">
            <h1>UNIT KERJA PRESIDEN</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($unitKerja as $row)
        <div class="col-12 col-md-6 col-xl-3 text-light text-center img-menteri">
            <a href="{{url($row->link_medsos)}}" target="_blank">
                <object data="{{asset('database/images/kementerian/'.$row->gambar)}}" width="280px" height="280px">
                </object>
            </a>
            <h5>{{$row->nama}}</h5>
            <h5>{{$row->nama_fakultas}}</h5>
            <h5>{{$row->nama_jabatan}}</h5>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-12 title-kementerian">
            <h1>KEMENTERIAN</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($kementerian as $row)
        <div class="col-12 col-md-6 col-xl-3 text-light text-center img-menteri">
            <a href="{{url($row->link_medsos)}}" target="_blank">
                <object data="{{asset('database/images/kementerian/'.$row->gambar)}}" width="280px" height="280px">
                </object>
            </a>
            <h5>{{$row->nama}}</h5>
            <h5>{{$row->nama_fakultas}}</h5>
            <h5>{{$row->nama_jabatan}}</h5>
        </div>
        @endforeach
    </div>
</div>
@endsection