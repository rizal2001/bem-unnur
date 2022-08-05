<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hallo Admin BEM!</title>
</head>

<style>
.img-email-bem {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 15px;
}

.text-email h1 {
    font-family: "Akira Expanded";
    text-align: center;
    color: white;
}

.box-aspirasi {
    text-align: left;
    background-color: #FF8D29;
    font-size: 25px;
    margin-top: 40px;
    padding: 20px;
    border-radius: 20px;
    font-family: "Glory";
    width: 70%;
    margin-left: auto;
    margin-right: auto;
}

.box-aspirasi h2 {
    font-family: "Akira Expanded";
    text-align: center;
    text-decoration: underline;
    text-underline-offset: 5px;
    color: white;
    font-weight: 600;
    margin-top: 15px;
}

.box-aspirasi h3 {
    text-align: center;
    color: white;
    font-weight: 600;
}

.copyright span {
    color: white;
    font-size: 14px;
    font-weight: 600;
}

.line-bottom-2 {
    margin-top: 20px;
    border-bottom: 3px solid white;
}

.copyright {
    text-align: center;
    padding: 20px;
}

.button-check {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

.button-check button {
    background: #B22727;
    color: white;
    border: 1px solid white;
    border-radius: 30px;
    padding: 10px
}
</style>

<body style="background-color: #B22727;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-email">
                    <br/>
                    <h1>Aspirasi Masuk!</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="box-aspirasi">
                    <h3>From: {{ $data['nama'] }} - {{ $data['email'] }}</h3>
                    <h2>ASPIRASI</h2>
                    <h3>" {{ $data['aspirasi'] }} "</h3>
                    <div class="button-check">
                        <a href="{{route('aspirasi')}}"><button>Check this out!!!</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="line-bottom-2"></div>

        <div class="row justify-content-center">
            <div class="col-12 copyright">
                <span>Copyright © 2022 BEM REMA UNNUR - Kementerian Informasi dan Komunikasi by <a
                        href="{{url('https://www.instagram.com/hmif_unnur/')}}" target="_blank"
                        style="text-decoration:none; color:#FBD444;"> HMIF Nurtanio</a></span>
            </div>
        </div>
    </div>
</body>

</html>