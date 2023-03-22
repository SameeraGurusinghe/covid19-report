<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body class="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">COVID-19 STAT REPORT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <ul class="navbar-nav ml-auto">
            @if(request()->url() != route('help-guides.index'))
            <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('help-guides.index') }}">Help Guide</a>
            </li>&nbsp;
            @endif

            <!-- <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('help-guides.create') }}">Add Help Guide</a>
            </li>&nbsp; -->

            @if(auth()->check())
            <li class="nav-item">
                <a class="btn btn-danger btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout
                </a>
            </li>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>

        @else

        @if(request()->route()->getName() != 'login' && request()->route()->getName() != 'register')
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                </li>&nbsp;
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
        @endif

        @endif

    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>