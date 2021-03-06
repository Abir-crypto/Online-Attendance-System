<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>O A S</title>
</head>
<body class="grey darken-3">
    <nav>
        <div class="nav-wrapper blue lighten-5 ">
            <a href="#" class="brand-logo black-text">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{route('home')}}" class="black-text hoverable">Home</a></li>
{{--                <li><a href="badges.html">Components</a></li>--}}
                <li><a href="{{route('logout')}}" class="black-text hoverable">Logout</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')


</body>
</html>
