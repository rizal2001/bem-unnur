@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - EDIT DATA BERITA')
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
                    <h4 class="card-title">{{ __('Data Berita') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('berita.update', ['id'=>$data->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="inputJudulBerita" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="inputJudulBerita"
                                value="{{ $data->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputDeskripsiBerita" class="form-label">Deskripsi</label>
                            <textarea class="ckeditor form-control" style="height:200px;"
                                name="deskripsi" required>{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputGambarBerita" class="form-label">Upload Berita</label>
                            <div class="mb-2">
                                <img src="{{asset('database/images/berita/'.$data->gambar_banner)}}" width="250"
                                    height="250" />
                            </div>
                            <input type="hidden" name="gambar_logo_old" value="{{$data->gambar_banner}}"
                                class="form-control">
                            <input type="file" name="gambar_logo_new" class="form-control" id="inputGambarBerita"
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