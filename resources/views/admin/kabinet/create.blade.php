@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - CREATE DATA KABINET')
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
                    <h4 class="card-title">{{ __('Create Data Kabinet') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('kabinet.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputNamaKabinet" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputname" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputTahunPeriode" class="form-label">Tahun Periode</label>
                            <input type="number" name="tahun_periode" class="form-control" id="inputTahunPeriode"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="inputVisi" class="form-label">Visi</label>
                            <textarea class="form-control" style="height:200px;" name="visi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputGambarLogo" class="form-label">Upload Logo Kabinet</label>
                            <input type="file" name="gambar_logo" class="form-control" id="inputGambarLogo"
                                accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="inputGambarStruktur" class="form-label">Upload Gambar Struktur</label>
                            <input type="file" name="gambar_struktur" class="form-control" id="inputgambar"
                                accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();

});
</script>
@endsection