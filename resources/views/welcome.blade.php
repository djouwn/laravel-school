<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laravel</title>
    <style>
        #logo {
            cursor: pointer;
        }
        #navbar {
            color: white;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }
        .seperator{
          width:150px;
        }
        a{
          cursor: pointer;
          color:black;
          font-weight:bold;
          
        }
        .sep{
          width:100px;
        }
    </style>
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="sep"></div>
        <img src="{{ asset('storage/road.jpg') }}" alt="Image" class="img-thumbnail" id="logo" width="130" height="150">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <div class="seperator"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#">l'Occasion <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">le Neuf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">le Rachat Expres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">la Cote</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">l'Electrique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">les Fiches Tech</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">le Financement</a>
                </li>
            </ul>
        </div>
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </nav>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Ky0f7vB1Jb8e1cRXjy9UWf1Y3X5tCDHG3QnJ7y2GXGfC3E0pb2U4Q1c8VXcHtj1i" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-SifrR4zO3g2+SwHY5+LB6X9yLXz1jk6x5L8p7Jf9vW/ul+Tf7fjV1k3oI6zD9eB" crossorigin="anonymous"></script>
</body>
</html>