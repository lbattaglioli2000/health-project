<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Floating labels example · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/floating-labels.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>
<body>
<form class="form-signin" method="post" action="{{ route('register') }}">

    @csrf

    <div class="text-center mb-4">
        <h1 class="masthead-heading mb-0">ReachOut <i class="far fa-comment-alt"></i></h1>
        <p>Welcome to ReachOut. We're a safe, respectful community where you can go to talk about anything that's on your mind. Sign up now to get started!</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-label-group">
        <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required="" autofocus="">
        <label for="inputEmail">Name</label>
    </div>

    <div class="form-label-group">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
        <label for="inputPassword">Password</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password again" required="">
        <label for="inputPassword">Password confirmation</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Register and ReachOut</button>
    <hr>
    <a class="btn btn-lg btn-secondary btn-block" href="{{ route('home') }}">Return home</a>
    <p class="mt-5 mb-3 text-muted text-center">ReachOut <i class="far fa-comment-alt"></i> © 2019</p>
</form>


</body>
</html>