<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ludomatics') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="{{ asset('external/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('external/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!--slick-->
    <link rel="stylesheet" type="text/css" href="{{asset('external/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('external/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/sliders.css')}}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/ludomatics.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @yield('headers')

</head>
<body>
    <div id="app">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{asset('img/logo/ludomatics.png')}}" alt="ludomatics" class="logo">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Inicio</a>
            </li>
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos de Preparación
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="nav-link" href="{{ url('/comipems') }}">COMIPEMS</a>
                <div class="dropdown-divider"></div>
                <a class="nav-link" href="{{ url('/universidad') }}">C. Universidad</a>
              </div>
            </li-->
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/comipems') }}">COMIPEMS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/universidad') }}">Universidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/aulud') }}">Ludomática</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/reg') }}">Regularización</a>
            </li>
            <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Otros cursos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="nav-link" href="{{ url('/ingles') }}">Inglés</a>
                <div class="dropdown-divider"></div>
                <a class="nav-link" href="{{ url('/computacion') }}">Computación</a>
              </div>
            </li-->
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/ingles') }}">Inglés</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/computacion') }}">Computación</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <!--main class="py-4"-->
            @yield('content')
        <!--/main-->
    </div>

    <!-- Footer -->
    <footer class="footer-distributed">
      <div class="container">
        <div class="row">
          <div class="footer-left">
            <a href="{{ url('/') }}"><img src="img/logo/ludomatics.png" alt="ludomatics" width="150px"></a>
            <p class="footer-links">
              <a href="{{ url('/') }}">Inicio</a> ·
              <a href="{{ url('/comipems') }}">COMIPEMS</a> ·
              <a href="{{ url('/universidad') }}">C. Universidad</a> ·
              <a href="{{ url('/ingles') }}">Inglés</a> ·
              <a href="{{ url('/reg') }}">Regularización</a> ·
              <a href="{{ url('/aulud') }}">Aula ludomática</a> ·
              <a href="{{ url('/computacion') }}">Computación</a> . 
              <a href="{{ url('/gallery') }}">Galería</a>
            </p>
            <p class="footer-company-name">Ludomatics &copy; 2019. Todos los derechos reservados</p>
          </div>
          <div class="footer-center">
            <div>
              <i class="fa fa-map-marker"></i>
              <p><span>Morelos núm 6 San Juan Tezompa</span> Chalco, Edo. Méx.</p>
            </div>
            <div>
              <i class="fa fa-phone"></i>
              <p>55 4084 6202</p>
            </div>
            <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:hola@ludomatics.org">hola@ludomatics.org</a></p>
            </div>
          </div>
          <div class="footer-right">
            <p class="footer-company-about">
              <span>Acerca de nosotros</span>
              Somos una empresa comprometida con la educación en todos los niveles. 
            </p>
            <div class="footer-icons">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/ludomatics/">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/ludomatics/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/ludomatics/">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Plugin JavaScript -->
    <script src="{{asset('external/jquery/jquery-2.2.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('external/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('external/jquery-easing/jquery.easing.min.js')}}"></script>
    
    <script src="{{asset('external/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/ludomatics.js') }}"></script>

    <script type="text/javascript" src="{{asset('external/slick/slick.min.js')}}"></script>
    <script src="{{asset('js/sliders.js')}}"></script>


</body>
</html>
