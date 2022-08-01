<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hallo Admin BEM!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet" />
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
                <img src="{{asset('guest/assets/images/logo.png')}}" width="200px" height="200px" />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-center text-email mt-5">
                    <h1>Aspirasi Masuk!</h1>
                </div>
            </div>
        </div>
    </div>
<div class="container">
   <div class="row justify-content-center">
    <div class="col-12">
        <div class="box-aspirasi shadow mt-5">
            <span>From: Aditia Gusti Ananda</span>
            <h2>ASPIRASI</h2>
            <h3>Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Accusantium ipsa unde fugit facere,
                consequatur nulla iusto in suscipit maiores blanditiis.</h3>
        </div>
    </div>
    </div>
</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 copyright text-center text-light mt-5">
                <span>Copyright © 2022 BEM REMA UNNUR - Kementerian Informasi dan Komunikasi by <a
                        href="{{url('https://www.instagram.com/hmif_unnur/')}}" target="_blank"
                        style="text-decoration:none; color:#FBD444;"> HIMF Nurtanio</a></span>
            </div>
        </div>
    </div>
</body>

</html>
