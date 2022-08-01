@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - DASHBOARD')

<style>
.text-1 {
    font-family: "glory";
}

.text-1 h3 {
    font-weight: 600;
}
</style>

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-4 grid-margin marginResponsive">
            <div class="card">
                <div class="card-body">
                    <div class="text-1 text-center">
                        <h3>Jumlah Pengunjung Web</h3>
                        <img class="mt-3" src="{{asset('guest/assets/images/pengunjung.png')}}" width="280px"
                            height="200px" />
                        <h3 class="mt-3">{{$jumlahVisitor}} Pengunjung</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin marginResponsive">
            <a href="{{route('aspirasi')}}" style="text-decoration:none; color:black;">
                <div class="card">
                    <div class="card-body">
                        <div class="text-1 text-center">
                            <h3>Jumlah Aspirasi</h3>
                            <img class="mt-3" src="{{asset('guest/assets/images/aspirasi.png')}}" width="200px"
                                height="200px" />
                            <h3 class="mt-3">{{$jumlahAspirasi}} Aspirasi</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 grid-margin marginResponsive">
            <a href="{{route('ormawa')}}" style="text-decoration:none; color:black;">
                <div class="card">
                    <div class="card-body">
                        <div class="text-1 text-center">
                            <h3>Jumlah Ormawa</h3>
                            <img class="mt-3" src="{{asset('guest/assets/images/ormawa.png')}}" width="200px"
                                height="200px" />
                            <h3 class="mt-3">{{$jumlahOrmawa}} Ormawa</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection