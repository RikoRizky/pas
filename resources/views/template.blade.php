<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="{{url ('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .footer{
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #ffff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark navbar-social fonts fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}" ><h3>Film</h3></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ url('film') }}" class="nav-link">Data Film</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br><br>

    <div class="container">
    <h1>@yield("title")</h1>
    <hr>
    @if(session()->has("pesan"))
    <div class="alert alert-info">
        {{ session("pesan") }}
    </div>  
    @endif
    @yield("content")
    </div>

    <br><br><br>

    <div class="footer bg-dark">
        <p>
            &copy; 2023 Riko Rizky All Rights Reserved
        </p>
    </div>
</body>
</html>