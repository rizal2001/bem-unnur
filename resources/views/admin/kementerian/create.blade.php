@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - CREATE DATA KEMENTERIAN')
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
                    <h4 class="card-title">{{ __('Create Data Kementerian') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('kementerian.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputNama" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputJabatan" class="form-label">Jabatan</label>
                            <select type="text" name="jabatan_id" class="form-control">
                                @foreach($jabatan as $jabatans)
                                <option value="{{$jabatans->id}}">{{$jabatans->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputFakultas" class="form-label">Fakultas</label>
                            <select type="text" name="fakultas_id" class="form-control">
                                @foreach($fakultas as $fakultass)
                                <option value="{{$fakultass->id}}">{{$fakultass->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputLinkMedsos" class="form-label">Media Sosial</label>
                            <input type="text" name="link_medsos" class="form-control" id="inputLinkMedsos" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputGambar" class="form-label">Foto</label>
                            <input type="file" name="gambar" class="form-control" id="inputGambar" accept="image/*">
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