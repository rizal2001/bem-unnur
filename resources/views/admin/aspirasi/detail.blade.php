@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - DETAIL DATA ASPIRASI')

@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection

<style>
.card-body h4 {
    line-height: 30px;
    letter-spacing: 1px;
    text-align: justify;
}
</style>

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin marginResponsive">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data->nama}} - {{$data->email}}<h4>
                    <h4 class="mt-3">" {{$data->aspirasi}} "</h4>
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