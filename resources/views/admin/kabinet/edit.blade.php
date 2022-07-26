@extends('layouts.master')
@section('title', 'BEM UNNUR - Edit Data Kabinet')
@section('content')

<style>
@media only screen and (min-width: 400px) and (max-width: 767px) {
    .marginResponsive {
        margin-top: 25px;
    }
}
</style>

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin marginResponsive">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Data Kabinet') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('kabinet.update', ['id'=>$data->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="inputNamaKabinet" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputname" value="{{ $data->nama }}"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="inputTahunPeriode" class="form-label">Tahun Periode</label>
                            <input type="number" name="tahun_periode" class="form-control" id="inputTahunPeriode"
                                value="{{ $data->tahun_periode }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputVisi" class="form-label">Visi</label>
                            <textarea class="form-control" style="height:200px;"
                                name="visi">{{ $data->visi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputGambarLogo" class="form-label">Upload Logo Kabinet</label>
                            <div class="mb-2">
                                <img src="{{asset('database/images/kabinet/logo/'.$data->gambar_logo)}}" width="250"
                                    height="250" />
                            </div>
                            <input type="hidden" name="gambar_logo_old" value="{{$data->gambar_logo}}"
                                class="form-control">
                            <input type="file" name="gambar_logo_new" class="form-control" id="inputGambarLogo"
                                accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="inputGambarStruktur" class="form-label">Upload Gambar Struktur</label>
                            <div class="mb-2">
                                <img src="{{asset('database/images/kabinet/struktur/'.$data->gambar_struktur)}}"
                                    width="250" height="250" />
                            </div>
                            <input type="hidden" name="gambar_struktur_old" value="{{$data->gambar_struktur}}"
                                class="form-control">
                            <input type="file" name="gambar_struktur_new" class="form-control" id="inputGambarStruktur"
                                accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();

});
</script>
@endsection