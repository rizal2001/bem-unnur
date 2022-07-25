@extends('layouts.master_front')
@section('title', 'BEM REMA UNNUR - KABINET HUGO ELECTRA')
@section('custom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
<script src="https://kit.fontawesome.com/b31e06099e.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="icon-slider owl-theme owl-carousel mt-5">
    <div class="carousel-inner">
        <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" width="100%" height="600px"
            style="filter:brightness(40%);" />
            
    </div>
    <div class="carousel-inner">
        <img src="{{asset('guest/assets/images/beranda-2.jpeg')}}" width="100%" height="600px"
            style="filter:brightness(40%);" />
    </div>
    <div class="carousel-inner">
        <img src="{{asset('guest/assets/images/beranda-3.jfif')}}" width="100%" height="600px"
            style="filter:brightness(40%);" />
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(".icon-slider").owlCarousel({
    items: 1,
    margin: 20,
    nav: true,
    navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"]
});
</script>
@endsection