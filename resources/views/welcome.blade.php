<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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

        .content {
            text-align: center;
        }

        {
            margin-left: 20px;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #login_button
        {
            margin-right: 3%;
        }

        #register_button
        {
            margin-left: 3%;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            aWMSome
        </div>

        <div class="buttons">
            @if (Route::has('login'))
                <div>
                    @auth
                        <button id="dashboard_button" type="button" class="btn btn-dark" onclick="window.location='{{ route('dashboard') }}'">Dashboard</button>
{{--                        <a href="{{ url('/dashboard') }}">Dashboard</a>--}}
                    @else
                        <button id="login_button" type="button" class="btn btn-dark" onclick="window.location='{{ route('login') }}'">Login</button>
{{--                        <a href="{{ route('login') }}">Login</a>--}}
                        @if (Route::has('register'))
                            <button id="register_button" type="button" class="btn btn-dark" onclick="window.location='{{ route('register') }}'">Register</button>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
