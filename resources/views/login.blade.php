<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Login</title>
</head>
<body>
    <div class="container" style="margin-top: 200px">
        <div class="container">
            <form action="{{route('login')}}">
                @csrf

                <div class="container center-align">
                    <div class="input-field row">
                        <input id="last_name" type="text" name="email" class="validate">
                        <label for="last_name">Email</label>
                    </div>
                    <div class="input-field row">
                        <input id="last_name" type="text" name="password" class="validate">
                        <label for="last_name">Password</label>
                    </div>
                    <p class="flow-text">
                        <label>
                            <input name="group" type="radio" value="1" />
                            <span>Student</span>
                        </label>
                    </p>
                    <p class="flow-text">
                        <label>
                            <input name="group" type="radio" value="0"/>
                            <span>Faculty</span>
                        </label>
                    </p>
                    <div class="row">
                        <input type="submit" class="btn waves-effect waves-light blue" value="Login">
                    </div>
                </div>
            </form>
            <div class="center-align">
                <a href="{{route('registration.page')}}" class="flow-text">Register here</a>
            </div>
        </div>
    </div>
</body>
</html>
