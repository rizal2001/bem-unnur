<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEM REMA UNNUR - KABINET HUGO ELECTRA</title>
    <link rel="shortcut icon" href="{{asset('logo.png')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('guest/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/global.css')}}">
    <link rel="stylesheet" href="{{asset('guest/responsive.css')}}">
</head>

<body style="background-color: #B22727;">
    <div class="bg-content">
        <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 col-xl-2 loading-page">
                <img src="{{asset('guest/assets/images/logo-unnur.png')}}" width="150px" height="150px" />
            </div>
            <div class="col-3 col-xl-2 loading-page">
                <img src="{{asset('guest/assets/images/logo.png')}}" width="150px" height="150px" />
            </div>
            <div class="col-3 col-xl-2 loading-page">
                <img src="{{asset('database/images/kabinet/logo/'.$kabinet->gambar_logo)}}" width="150px"
                    height="150px" />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="loader"></div>
        </div>
    </div>

    <script>
    // loading page
    setTimeout(function() {
        window.location.href = '/beranda';
    }, 3000);
    </script>
</body>

</html>