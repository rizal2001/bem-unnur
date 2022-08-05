@extends('layouts.master')
@section('title', 'BEM UNNUR - Edit Data Background')
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
                    <h4 class="card-title">{{ __('Data Background') }} {{$halaman->menu}}</h4>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('background.update', ['halamanId'=>$halaman->id, 'id'=>$background->id])}}"
                        method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="inputGambar" class="form-label">Upload Gambar</label>
                            <div class="mb-2">
                                <img src="{{asset('database/images/background/'.$background->gambar)}}" width="250"
                                    height="250" />
                            </div>
                            <input type="hidden" name="gambar_old" value="{{$background->gambar}}"
                                class="form-control">
                            <input type="file" name="gambar_new" class="form-control" id="inputGambar"
                                accept="image/*">
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