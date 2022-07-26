@extends('layouts.master')
@section('title', 'BEM UNNUR - Create Data Berita')
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
                    <h4 class="card-title">{{ __('Create Data Berita') }}</h4>
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
                            <label for="inputname" class="form-label">Judul</label>
                            <input type="text" name="name" class="form-control" id="inputname"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputpassword" class="form-label">Deskripsi</label>
                            <!-- <input type="password" name="visi" class="form-control" id="inputpassword"
                                aria-describedby="emailHelp" required> -->
                            <textarea class="ckeditor form-control" style="height:200px;" name="visi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputlogo" class="form-label">Upload Foto Berita</label>
                            <input type="file" name="berita" class="form-control" id="inputlogo"
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