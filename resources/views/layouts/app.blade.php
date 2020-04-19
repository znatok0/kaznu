<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Военная кафедра КазНУ</title>

    <!-- Scripts -->
    <script src="jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/size.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <header class="header">
      <div class="header-container w90m0auto">
        <div class="navbar-wrap">
          <div class="navbar__logo">
            <div class="logo" onclick="location.href='{{ url('/') }}'">
              <img class="logo__img" src="{{ asset('img/mainLogo.png') }}" alt="logo"/>
              <strong class="logo__text"
                >КАЗАХСКИЙ <br />
                НАЦИОНАЛЬНЫЙ <br />
                УНИВЕРСИТЕТ</strong
              >
              <span class="logo__des">ИМЕНИ АЛЬ-ФАРАБИ</span>
            </div>
          </div>
          <div class="navbar__menu">
            <div class="header-topnav">
              <ul class="menu__ul">
                <li class="menu__li">
                  <a href="{{ route('about') }}" class="menu__links">О кафедре</a>
                </li>
                <li class="menu__li">
                  <a href="./students.html" class="menu__links">Поступающим</a>
                </li>
                <li class="menu__li">
                  <a href="./teachers.html" class="menu__links"
                    >Преподавательский состав</a
                  >
                </li>
                <li class="menu__li">
                  <a href="./international.html" class="menu__links"
                    >Международное сотрудничество</a
                  >
                </li>
                <li class="menu__li">
                  <a href="./contacts.html" class="menu__links">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="navbar_lang">
            <a href="/" class="lang__change">RU</a>
            <a href="/" class="lang__change">KZ</a>
          </div>
        </div>
      </div>
    </header>
    <div class="search-bar">
      <div class="search-bar-container w90m0auto">
        <span class="searching__click"><i class="fas fa-search"></i></span>
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              {{-- @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif --}}
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
      </div>
    </div>
    <div id="app">
      <main class="py-4" style="padding-top:0; margin-left:5%; margin-right:5%;">
        @yield('content')
      </main>
    </div>
  <footer class="page-footer font-small indigo" style="background:linear-gradient(to right, #06162F, #0D345F 100%)">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <p>© Казахский национальный университет им. аль-Фараби</p>


        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>

  </footer>
</body>
</html>
