@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - DATA KABINET')

@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection
@section('content')

<style>
.marginCard {
    margin-bottom: 10px;
}

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
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <a href="{{route('kabinet.create')}}"
                                        class="btn btn-primary btn-sm btn-rounded btn-icon-text marginCard">
                                        <i class="ti-upload btn-icon-prepend"></i>
                                        Create
                                    </a>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tahun Periode</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach($data as $row)
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->tahun_periode}}</td>
                                    <td>{{$row->visi}}</td>
                                    <td><a href="{{route('misi', ['kabinetId'=>$row->id])}}"
                                            class="btn btn-info btn-sm btn-rounded">Detail</a></td>
                                    <td class="text-center">
                                        <a href="{{route('kabinet.edit', ['id'=>$row->id] )}}"
                                            class="btn btn-dark btn-sm btn-rounded btn-icon-prepend">Edit
                                            <i class="ti-reload btn-icon-append"></i></a>
                                        <a href="{{route('kabinet.delete', ['id'=>$row->id] )}}"
                                            class="btn btn-danger btn-rounded btn-icon-text"
                                            onclick="return confirm('Apakah anda yakin ?')">Delete
                                            <i class="ti-trash btn-icon-append"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">

</script>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();

});
</script>
@endsection