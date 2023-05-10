<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--    Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    {{--    CSS--}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark col-auto col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
                <div class="bg-dark p-2">
                    <a class="d-flex text-decoration-none mt-3 align-items-center text-white">
                        <div>
                            <span class="fs-3 d-none d-sm-inline">aWMSome</span>
                        </div>
                    </a>
                    <ul class="nav nav-pills flex-column mt-5 pt-5">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 bi bi-file-text-fill"></i><span class="fs-5 ms-2 d-none d-sm-inline">Documents</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 bi bi-box2-fill"></i><span
                                    class="fs-5 ms-2 d-none d-sm-inline">Stocks</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 dropdown">
                            <a class="nav-link text-white dropdown-toggle fs-5" href="#" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-geo-alt-fill"></i><span
                                    class="fs-5 ms-2 d-none d-sm-inline">Warehouse</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Type</a></li>
                                <li><a class="dropdown-item" href="#">Localization</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="btn btn-light mb-4 btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li><a class="dropdown-item" href="route('logout')"
                                   onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a></li>
                        </form>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{--    @include('layouts.navigation')--}}




    {{--    <main>--}}
    {{--        {{ $slot }}--}}
    {{--    </main>--}}


</div>

</body>
</html>
