@extends('layouts.master')
@section('title', 'BEM UNNUR - Data Misi')

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
                    <h4 class="card-title">{{ __('Data Misi') }}<span> Kabinet {{$kabinet->nama}}</span></h4>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <a href="{{route('misi.create', ['kabinetId'=>$kabinet->id])}}"
                                        class="btn btn-primary btn-sm btn-rounded btn-icon-text marginCard">
                                        Create
                                    </a>
                                    <a href="{{route('kabinet')}}"
                                        class="btn btn-secondary btn-sm btn-rounded btn-icon-text marginCard">
                                        Back
                                    </a>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Point Misi</th>
                                    <th>Deskripsi Misi</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach($misi as $row)
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->deskripsi}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td class="text-center">
                                        <a href="{{route('misi.edit', ['kabinetId'=>$kabinet->id, 'id'=>$row->id] )}}"
                                            class="btn btn-dark btn-sm btn-rounded btn-icon-prepend">Edit
                                        </a>
                                        <a href="{{route('misi.delete', ['kabinetId'=>$kabinet->id, 'id'=>$row->id] )}}"
                                            class="btn btn-danger btn-rounded btn-icon-text"
                                            onclick="return confirm('Apakah anda yakin ?')">Delete
                                            </i></a>
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