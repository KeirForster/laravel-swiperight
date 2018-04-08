<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
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
            About Us
        </div>
        <div class="dark">
            <figure>
                <img src="/images/dead pool.jpg" alt="dead pool">
                <figcaption>We want you to spend time doing what you love</figcaption>
            </figure>
            <p style="text-align: left; padding-left: 20%; padding-right: 20%; padding-top: 10px;">
                We want you to spend your time the way you want. Sign-up for as many movies as you like with the swipe of a finger. When a potential match has expressed mutual interest in the same movie, only then should you invest a large amount of time. We will help you find find and match with as many people in the easiest and fastest way possible.
            </p>
        </div>

        <div class="links">
            <a href="mailto:admin@swiperighttoapply.com?subject=swipe right to apply, help">Email</a>
            <a href="https://twitter.com">Twitter</a>
            <a href="https://facebook.com/swiperighttoapply">Facebook</a>
            <a href="https://developer.apple.com/app-store/">iOS app</a>
        </div>
    </div>
</div>
</body>
</html>
