@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - CREATE DATA KATEGORI ORMAWA')
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
                    <h4 class="card-title">{{ __('Create Data Kategori Ormawa') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('kategori.ormawa.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputNama" required>
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