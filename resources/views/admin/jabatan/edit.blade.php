@extends('layouts.master')
@section('title', 'BEM UNNUR - Edit Data Jabatan')
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
                    <h4 class="card-title">{{ __('Data Jabatan') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('jabatan.update', ['id'=>$data->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="inputkategoriKementerianId" class="form-label">Kategori Kementerian</label>
                            <select type="text" name="kategori_kementerian_id" class="form-control">
                                <option value="{{$data->kategori_kementerian_id}}">{{$data->kategoriKementerian->nama}}</option>
                                @foreach($kategori as $kategoris)
                                <option value="{{$kategoris->id}}">{{$kategoris->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputKode" class="form-label">Kode</label>
                            <input type="text" name="kode" class="form-control" id="inputKode"
                                onkeyup="this.value = this.value.toUpperCase();" value="{{$data->kode}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Jabatan</label>
                            <input type="text" name="nama" class="form-control" id="inputNama" value="{{$data->nama}}"
                                required>
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