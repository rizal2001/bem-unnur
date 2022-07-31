@extends('layouts.master')
@section('title', 'BEM UNNUR - Edit Data Kementerian')
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
                    <h4 class="card-title">{{ __('Data Kementerian') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('kementerian.update', ['id'=>$data->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputNama" value="{{$data->nama}}"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="inputJabatan" class="form-label">Jabatan</label>
                            <select type="text" name="jabatan_id" class="form-control">
                                <option value="{{$data->jabatan_id}}">{{$data->jabatan->nama}}</option>
                                @foreach($jabatan as $row)
                                <option value="{{$row->id}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputFakultas" class="form-label">Fakultas</label>
                            <select type="text" name="fakultas_id" class="form-control">
                                <option value="{{$data->fakultas_id}}">{{$data->fakultas->nama}}</option>
                                @foreach($fakultas as $row)
                                <option value="{{$row->id}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputLinkMedsos" class="form-label">Media Sosial</label>
                            <input type="text" name="link_medsos" class="form-control" id="inputLinkMedsos"
                                value="{{$data->link_medsos}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputGambar" class="form-label">Foto</label>
                            <div class="mb-2">
                                <img src="{{asset('database/images/kementerian/'.$data->gambar)}}" width="250"
                                    height="250" />
                            </div>
                            <input type="hidden" name="gambar_old" value="{{$data->gambar}}" class="form-control">
                            <input type="file" name="gambar_new" class="form-control" id="inputGambar" accept="image/*">
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