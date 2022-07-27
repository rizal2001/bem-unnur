@extends('layouts.master_front')
@section('title', 'ASPIRASI - BEM REMA UNNUR')
@section('custom-css')
@endsection

@section('content')
<div class="bg-content">
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 title-aspirasi">
            <h1>ASPIRASI MAHASISWA</h1>
        </div>
        <div class="col-12 bg-form shadow mt-4">
            <form>
                <div class="text-aspirasi text-center">
                    <h3>FORM ASPIRASI</h3>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputName">Nama</label>
                    <input id="Name" class="form-control" placeholder="Masukan Nama" type="text" name="Name"
                        :value="old('Name')" required autofocus />
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail">E-mail</label>
                    <input id="email_login" class="form-control" placeholder="Masukan E-mail" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputAspirasi1">Aspiarsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"
                        placeholder="Masukan Aspirasimu"></textarea>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-aspirasi rounded-pill">KIRIM</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection