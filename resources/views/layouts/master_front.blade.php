<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('logo.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('guest/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/global.css')}}">
    <link rel="stylesheet" href="{{asset('guest/responsive.css')}}"> @yield('custom-css')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- backsound -->
    <div class="position-absolute">
        <iframe width="1" height="1"
            src="https://www.youtube.com/embed/oAcHizN0tqQ?autoplay=1&&playlist=oAcHizN0tqQ&loop=1" frameborder="0"
            allowfullscreen style="opacity:0;"></iframe>
    </div>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 mt-2">
                    <div class="logo-header">
                        <a href="{{url('/beranda')}}">
                            <img src="{{asset('guest/assets/images/logo.png')}}" width="80px" height="80px" />
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="text-header mt-4">
                        <p>BEM Republik Mahasiswa</p>
                        <p>Universitas Nurtanio Bandung</p>
                        <p>KABINET HUGO ELECTRA</p>
                    </div>
                </div>
                <div class="col-8">
                    <div class="menu">
                        <ul class="nav">
                            <li>
                                <a href="{{url('/beranda')}}">BERANDA</a>
                            </li>
                            <li>
                                <a href="{{url('/profil')}}">PROFIL</a>
                            </li>
                            <li>
                                <a href="{{url('/kementerian')}}">KEMENTERIAN</a>
                            </li>
                            <li>
                                <a href="{{url('/ormawa')}}">ORMAWA</a>
                            </li>
                            <li>
                                <a href="{{url('/aspirasi')}}">ASPIRASI</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 text-footer">
                    <a href="{{url('https://www.unnur.ac.id/')}}" target="_blank" style="color: transparent;">
                        <img src="{{asset('guest/assets/images/logo-unnur.png')}}" width="100px" height="100px" />
                    </a>
                    <a href="{{url('/beranda')}}">
                        <img src="{{asset('guest/assets/images/kabinet.png')}}" width="120px" height="100px" />
                    </a>
                    <h4 class="mt-4">KABINET HUGO ELECTRA</h4>
                    <h4>Badan Eksekutif Mahasiswa Republik Mahasiswa</h4>
                    <h4>Univesitas Nurtanio Bandung 2022</h4>
                    <h4 class="mt-4">MEDIA SOSIAL</h4>
                    <a href="{{url('https://www.instagram.com/bemnurtanio/')}}" target="_blank">
                        <img src="{{asset('guest/assets/images/ig.png')}}" width="40px" height="40px" />
                    </a>
                    <a href="{{url('https://www.youtube.com/channel/UCq1bg7t4hYfwEfqhoc8RHaQ')}}" target="_blank">
                        <img src="{{asset('guest/assets/images/yt.png')}}" width="40px" height="40px" style="margin-left:5px;"/>
                    </a>
                    <h4 class="mt-3">KONTAK</h4>
                    <p>E-mail : <a href="mailto:bemnurtaniobandung@gmail.com"
                            style="text-decoration:none; color:white;">bemnurtaniobandung@gmail.com</a>
                    </p>
                    <p>WhatsApp : <a href="{{url('https://wa.me/+6285642394106')}}" target="_blank"
                            style="text-decoration:none; color:white;">085642394106</a></p>
                </div>
                </hr>
                <div class="col-6 text-center text-maps">
                    <h3>SEKRETARIAT BEM REMA UNNUR</h3>
                    <iframe class="maps-footer shadow mt-3"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8678865234015!2d107.57701022695312!3d-6.906397399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x375989f7f7b103de!2zNsKwNTQnMjIuMiJTIDEwN8KwMzQnNTIuMiJF!5e0!3m2!1sid!2sid!4v1658831173446!5m2!1sid!2sid"
                        width="550px" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="line-bottom"></div>

            <div class="row justify-content-center mt-4">
                <div class="col-12 copyright text-center text-light">
                    <span>Copyright © 2022 BEM REMA UNNUR - Kementerian Informasi dan Komunikasi by <a
                            href="{{url('https://www.instagram.com/hmif_unnur/')}}" target="_blank"
                            style="text-decoration:none; color:#FBD444;"> HIMF Nurtanio</a></span>
                </div>
            </div>
        </div>
    </footer>

    @yield('script')
    <script>
    $(function($) {
        let url = window.location.href;
        $('.nav li a').each(function() {
            if (this.href === url) {
                $(this).closest('a').addClass('active');
            }
        });
    });

    // var myVar;

    // function myFunction() {
    //     myVar = setTimeout(showPage, 1000);
    // }

    // function showPage() {
    //     document.getElementById("loader").style.display = "none";
    //     document.getElementById("myDiv").style.display = "block";
    // }
    </script>
</body>

</html>