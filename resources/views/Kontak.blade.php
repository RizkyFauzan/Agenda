<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QEEPOO contact</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=pervitina-dex:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #bcd1f2;
                color: #0f2f68;
                font-family: 'jarbomhollow', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-rig5t {
                position: absolute;
                right: 10px;0 
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600 ;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    INI KONTAK
                </div>

                <div class="links">
                    <a href="{{url('/')}}">Design Grafis</a>
                    <a href="{{url('/')}}">Editing</a>
                    <a href="{{url('/')}}">News</a>
                    <a href="{{url('/')}}">Forge</a>
                    <a href="{{url('/')}}">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
