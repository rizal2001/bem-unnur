@extends('layouts.master')
@section('title', 'BEM REMA UNNUR - CREATE DATA USERS')
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
                    <h4 class="card-title">{{ __('Data User') }}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputname" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputemail" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="inputemail" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputpassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputpassword" required>
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