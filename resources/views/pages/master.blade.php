<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117095824-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-117095824-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'SwipeRightToApply: Apply instantly to jobs nearby')</title>

    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
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

        .top-right {
        position: absolute;
        right: 10px;
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
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }

        .footer {
            position: absolute;
            width: 100%;
            height: 60px; /* Set the fixed height of the footer here */
            line-height: 60px; /* Vertically center the text there */
            background-color: #f5f5f5;
        }

        /*.m-b-md {*/
        /*margin-bottom: 30px;*/
        /*}*/
        @yield ('css')
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">SwipeRightToApply</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ setClassForURLPath('/') }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ setClassForURLPath('about') }}">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item {{ setClassForURLPath('contact') }}">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item {{ setClassForURLPath('post/*') }}">
                <a class="nav-link" href="/post/1">Our Jobs</a>
            </li>
            <li class="nav-item {{ setClassForURLPath('profile') }}">
                <a class="nav-link" href="/profile">Our Company Profile</a>
            </li>
        </ul>
    </div>
</nav>

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            @yield('header')
        </div>
        <div style="color:black; font-weight: 800; margin: 5%;">
            @yield('data')
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Thank you for using SwipeRightToApply</span>
    </div>
</footer>

@yield('footer')
</body>
</html>
