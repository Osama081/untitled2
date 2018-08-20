<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Agent Menu</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Office Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dash.board')}}">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('complain')}}">Register Complain</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pending.complain') }}">Vie Complains Status and Complain Number</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('file.leave')}}">Submit Leave Application</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">Active Now:: {{Auth::user()->name}}</a>
            </li>


            <li class="nav-item">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    {{method_field('POST')}}
                    <input type="submit" class="btn btn-primary nav-link" value="Logout">
                </form>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>


</body>
</html>
