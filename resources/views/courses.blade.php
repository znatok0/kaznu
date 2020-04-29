@include('simple_html_dom')

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Военная кафедра КазНУ</title>

    <!-- Scripts -->
    {{-- <script src="jquery-3.4.1.min.js"></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/8a001c22ef.js" crossorigin="anonymous"></script>
    <script src="./js/jquery.fancybox.min.js"></script>
    <script src="./js/main.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/size.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet"> --}}
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css"
    />
</head>
<body>
  <nav class="navbar">
    <div class="nav-wrapper">
      <div class="navbar-left">
        <div class="logo-crm">
          <img class="logo-crm__img" src="./img/mainLogo.png" alt="logo" />
          <div class="logo-crm__text">
            <strong class="logo-crm__main"
              >КАЗАХСКИЙ НАЦИОНАЛЬНЫЙ УНИВЕРСИТЕТ</strong
            >
            <span class="logo-crm__des">ИМЕНИ АЛЬ-ФАРАБИ</span>
          </div>
        </div>
      </div>
    </div>
  </nav>
    <div class="search-bar">
      <div class="search-bar-container w90m0auto">
        <span class="searching__click"></span>
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
      <main style="padding-top:0;">
        <div class="container">
          <div class="container-fluid">
              <div class="row">
                {{-- <div class="col-sm-3 col-md-2 sidebar" id="sidebar-left">
                  <ul class="nav nav-sidebar">
                      <li>
                          <a href="#" class="waves-effect waves-orange pointer">ЗСУ 23-4 "Шилка"</a>
                          <a href="./testing.html" class="waves-effect waves-orange pointer">ЗСУ "Стрела-10"</a>
                      </li>
                  </ul>
                </div> --}}
                {{-- <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> --}}
                  <?php 
                    $arrContextOptions=array(
                        "ssl"=>array(
                            "verify_peer"=>false,
                            "verify_peer_name"=>false,
                        ),
                    );  
                    $html=file_get_contents('https://www.kaznu.kz/Content/%D0%97%D0%A1%D0%A3-23-4%20%D0%A8%D0%B8%D0%BB%D0%BA%D0%B0/page1.html', false, stream_context_create($arrContextOptions));
                  ?>
                  <div class="row justify-content-center">
                    <p style="font-size:15px;">Мои курсы</p> 
                  </div>
                  <table class="courses-table">
                    <tbody>
                    <?php 
                      $lesson_id = 1;
                    ?>
                    @foreach($courses as $courseKey=>$course)
                    <tr>
                      <td>
                        <a href="/lesson/{{$course->id}}/{{$lesson_id}}"> 
                          {{$course->course_name}}
                        </a>
                      </td>
                      <td>
                        Преподаватель: {{json_decode(DB::table('users')->select('name')->where('id',$course->teacher_id)->get())[0]->name}}
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                {{-- </div> --}}
              </div>
            </div>
      </div>
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