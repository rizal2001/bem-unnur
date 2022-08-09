@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - DATA ASPIRASI')

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
                    <h4 class="card-title">{{ __('Data Aspirasi') }}</h4>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aspirasi</th>
                                    <th class="text-center">Aksi</th>
                                    <!-- <th>Delete</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach($data as $row)
                                <tr class="aspirasi">
                                    <td><?php echo $i++; ?></td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{substr($row->aspirasi, 0, 50);}} ....</td>
                                    <td class="text-center">
                                        <a href="{{route('aspirasi.detail', ['id'=>$row->id] )}}"
                                            class="btn btn-primary btn-rounded btn-icon-text">Detail
                                            <i class="ti-eye btn-icon-append"></i></a>
                                        <a href="{{route('aspirasi.delete', ['id'=>$row->id] )}}"
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