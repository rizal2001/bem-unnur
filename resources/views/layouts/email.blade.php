<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hallo Admin BEM!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link href="http://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/glory" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('logo.png')}}" />
    <link rel="stylesheet" href="{{asset('guest/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/global.css')}}">
</head>

<body style="background-color: #B22727;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 img-email-bem">
                <img src="{{asset('guest/assets/images/logo.png')}}" width="160px" height="160px" />
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-center text-email mt-5">
                    <h1>Aspirasi Masuk!</h1>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10">
                <div class="box-aspirasi shadow mt-5">
                    <h3>From: Aditia Gusti Ananda</h3>
                    <h2>ASPIRASI</h2>
                    <h3 class="mt-3">" Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Accusantium ipsa unde fugit facere,
                        consequatur nulla iusto in suscipit maiores blanditiis "</h3>
                </div>
            </div>
        </div>

        <div class="line-bottom-2 mt-5"></div>

        <div class="row justify-content-center">
            <div class="col-12 copyright text-center text-light mt-2 p-3">
                <span>Copyright © 2022 BEM REMA UNNUR - Kementerian Informasi dan Komunikasi by <a
                        href="{{url('https://www.instagram.com/hmif_unnur/')}}" target="_blank"
                        style="text-decoration:none; color:#FBD444;"> HMIF Nurtanio</a></span>
            </div>
        </div>
    </div>
</body>

</html>