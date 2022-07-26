@extends('layouts.master')
@section('title', 'BEM UNNUR - Create Data Kabinet')
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="inputname"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputemail" class="form-label">Tahun Periode</label>
                            <input type="text" name="tahun" class="form-control" id="inputtahun"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputpassword" class="form-label">Visi</label>
                            <!-- <input type="password" name="visi" class="form-control" id="inputpassword"
                                aria-describedby="emailHelp" required> -->
                            <textarea class="ckeditor form-control" style="height:200px;" name="visi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputlogo" class="form-label">Upload Logo Kabinet</label>
                            <input type="file" name="logo" class="form-control" id="inputlogo"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputgambar" class="form-label">Upload Gambar Struktur</label>
                            <input type="file" name="gambar" class="form-control" id="inputgambar"
                                aria-describedby="emailHelp">
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