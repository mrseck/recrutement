<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ asset('js/style.js') }}" defer></script>
</head>
<body>

<header>
    <nav class="navbar">
        <a href="/" class="nav-branding">Simplon Event</a>

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="/" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="/index" class="nav-link">Liste des participants</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span> 
        </div>
    </nav>
    <div class="container">
     <div class="jumbotron text-white p-4">
        <center>
        @yield('content1')
       </center>
     </div>
    </div>
</header> 


<div class="container">
    @yield('content')
</div>

<footer class="mt-3">
        <div class="footer-content">
            <h3>Simplon Event</h3>
            <p>Vous souhaitez visiter le monde du numerique? <br> faites vous enregistrer et suivez nous dans de belles aventures !</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023, designed by <span class="color:white">ISMAEL SECK</span></p>
        </div>
    </footer>
  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
       <script>
        swal("{{session('status')}}");
       </script>
    @endif
</body>
</html>
