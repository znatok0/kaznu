<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Военная кафедра КазНУ</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/8a001c22ef.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/size.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap&subset=cyrillic"
    rel="stylesheet"
    />
</head>
<body>
    <header class="header">
      <div class="header-container w90m0auto">
        <div class="navbar-wrap">
          <div class="navbar__logo">
            <div class="logo" onclick="location.href='{{ url('/') }}'">
              <img class="logo__img" src="{{ asset('img/mainLogo.png') }}" alt="logo"/>
              <strong class="logo__text">
                КАЗАХСКИЙ <br />
                НАЦИОНАЛЬНЫЙ <br />
                УНИВЕРСИТЕТ</strong>
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
                  <a href="{{ route('students') }}"  class="menu__links">Поступающим</a>
                </li>
                @if(Auth::check())
                  <li class="menu__li">
                    <a href="{{ route('courses') }}"  class="menu__links">Перейти к обучению</a>
                  </li>
                @endif
                <!-- <li class="menu__li">
                  <a href="./teachers.html"  class="menu__links"
                    >Преподавательский состав</a
                  >
                </li> -->
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
        <span class="searching__click"></span>
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" style="color:white;">{{ __('Войти') }}</a>
              </li>
              {{-- @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif --}}
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();" >
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
            @endguest
        </ul>
      <script>
        function openUl(){
          document.getElementById('ul-top-open').classList.toggle("show");
        }
      </script>
      </div>
    </div>
    <div id="app">
      <main style="padding-top:0;">
        @yield('content')
      </main>
    </div>
    <footer class="footer">
      <div class="footer-container w90m0auto ">

        <div class="footer-text">
          <div class="footer-address-text">
          <p>© Казахский национальный университет им. аль-Фараби <br/> Республика Казахстан, Алматы, 050040 пр. аль-Фараби, 71 <br/> Тел. 8 (727) 377-33-33, 8 (727) 377-33-30 <br/> Факс +7 (727) 377-33-44 <br/> info@kaznu.kz</p>
          </div>
          <div class="footer-contact-text">
          <p class="numb">Контакт центр <br/> +7 (727) 377-33-30</p>
          </div>
          <div class="footer-center-text">
          <p class="numb">Приемная комиссия <br/> +7 (727) 377-33-30</p>
          </div>
        </div>

        <div class="socials">
          <a href="https://www.instagram.com/vk_kaznu/" class="social-links" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.instagram.com/vk_kaznu/" class="social-links" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/vk_kaznu/" class="social-links" target="_blank"><i class="fab fa-telegram"></i></a>
        </div>

      </div>
    </footer>
</body>
</html>
