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

    <title>Registration</title>
</head>
<body>
<div class="container" style="margin-top: 200px">
    <div class="container">
        <form action="{{route('register')}}" method="post">
            @csrf
            @method('post')
            <div class="container center-align">
                <div class="input-field row">
                    <input id="last_name" type="text" name="first_name" class="validate">
                    <label for="last_name">First Name</label>
                </div>
                <div class="input-field row">
                    <input id="last_name" type="text" name="last_name" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field row">
                    <input id="last_name" type="text" name="email" class="validate">
                    <label for="last_name">Email</label>
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
                    <input type="submit" class="btn waves-effect waves-light blue" value="Register">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
