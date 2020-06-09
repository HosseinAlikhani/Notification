<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap-grid.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap-grid.min.css"crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.Laravel = {!! json_encode([
        'user' => auth()->check() ? auth()->user()->id : null,
    ]) !!};
        window.notify = {{ \App\Helper\Notify::count() }};
    </script>
    @yield('css')
    <title>Hello, world!</title>
</head>
<body>
<div id="app">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span style="color: tomato">
                <i class="fa fa-bell fa-2x"></i>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Notification</a>
                </li>
            </ul>
            <div class="m-3">
                <vue-notification></vue-notification>
            </div>
            <ul class="navbar-nav my-2 my-lg-0">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.view') }}">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" > Wellcome {{ Auth::user()->username}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            @endguest
            </ul>
        </div>
    </nav>
    <div class="border mt-2 p-3">
        @yield('content')
    </div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@yield('script')

<script src="{{ mix('js/app.js') }}"></script>
<script src="src/bootstrap/js/bootstrap.bundle.js"crossorigin="anonymous"></script>
<script src="src/bootstrap/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<script src="src/bootstrap/js/bootstrap.js"crossorigin="anonymous"></script>
<script src="src/bootstrap/js/bootstrap.min.js"crossorigin="anonymous"></script>
</body>
</html>