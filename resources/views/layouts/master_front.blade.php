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
                        <a href="">
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