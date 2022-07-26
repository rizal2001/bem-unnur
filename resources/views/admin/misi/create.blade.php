@extends('layouts.master')
@section('title', 'BEM UNNUR - Create Data Misi')
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
                    <h4 class="card-title">{{ __('Create Data Misi Kabinet ') }}<span>{{$kabinet->nama}}</span></h4>
                    <p>*Input misi satu per satu</p>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('misi.store', ['kabinetId'=>$kabinet->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputJudulMisi" class="form-label">Judul Misi</label>
                            <input type="text" name="judul" class="form-control" id="inputJudulMisi" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputDeskripsiMisi" class="form-label">Deskripsi Misi</label>
                            <textarea class="form-control" style="height:200px;" name="deskripsi"></textarea>
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