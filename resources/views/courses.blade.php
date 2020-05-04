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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/8a001c22ef.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" />
    <link href="{{ asset('css/crm/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
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
        <div class="logo" onclick="location.href='{{ url('/') }}'" style="cursor:pointer;">
        <div class="logo-crm">
          <img class="logo-crm__img" src="./img/mainLogo.png" alt="logo" />
          <div class="logo-crm__text">
            <strong class="logo-crm__main" style="color:white;"
              >КАЗАХСКИЙ НАЦИОНАЛЬНЫЙ УНИВЕРСИТЕТ</strong
            >
            <span class="logo-crm__des" style="color:white;">ИМЕНИ АЛЬ-ФАРАБИ</span>
          </div>
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
    <ul class="sidenav app-sidenav open" style="display: block;">
      <li>
        <a href="{{ route('home') }}" class="waves-orange pointer"><i class="fa fa-caret-left" style="margin-right:0;width:10px;"></i>Назад</a>
        {{-- @if({{ json_decode(DB::table('users')->select('role_id')->where('id',Auth::id())->get())[0]->role_id == 1 }})
          <a href="#" onclick="getMessage('courses')" class="waves-orange pointer">Панель администратора</a>
        @endif --}}
        <a href="#" onclick="getMessage('courses')" class="waves-orange pointer">Курсы</a>
        <a href="#" onclick="getMessage('3d')" class="waves-orange pointer">3D Визуализация</a>
        {{-- <a href="#" onclick="getMessage('lib')" class="waves-orange pointer">Библиотека</a> --}}
      </li>
    </ul>
    <div id="app">
      <main style="padding-top:0;">
      <div class="cab-content" style="margin-top:0px;">
        <div class="page-title">
          <h3 id="content-header">Личный кабинет</h3>
        </div>
        <div class="container" style="width:100%;">
          <div class="row">
            <div class="col-md-6">
              <ul id="courses-list" style="display: none;">
                @foreach($courses as $courseKey=>$course)
                <li id="li-lists"><a href="/lesson/{{$course->id}}/1" id="a-lists" onclick="getMessage('{{$course->id}}')">{{$course->course_name}}</a></li><hr class="hr-line">
                @endforeach
              </ul>
              <ul id="3d-models" style="display: none; width:40%;">
                <li id="li-lists"><a href="{{ route('shilka') }}" id="a-lists" target="_blank">"ЗСУ 23-4 Шилка"</a></li><hr class="hr-line">
                <li id="li-lists"><a href="{{ route('strela') }}" id="a-lists" target="_blank">"Стрела-10"</a></li><hr class="hr-line">
                <li id="li-lists"><a href="{{ route('zsu23-2') }}" id="a-lists" target="_blank">"ЗУ 23-2"</a></li><hr class="hr-line">
              </ul>
            </div>
            <style>
              ul#courses-list{
                width:40%;
              }
              .hr-line{
                opacity:0.4;
              }
              #li-lists{
                background-color: white;
                color: #0094ce;
                /* width: 13%; */
                padding: 8px 8px 8px 14px;
                border-radius: 5px;
                margin:5px 0 5px 0;
              }
              #a-lists{
                color:#0094ce;
              }
              #li-list:hover{
                background-color: #0094ce;
                color: white;
              }
              #a-list:hover{
                color:white;
              }
            </style>
            {{-- <div class="col-md-6">
              <ul id="strela" style="display: none;">
                @foreach($course1_lessons as $lessonKey=>$lesson)
                  <li>{{$lesson->lesson_name}}</li>
                @endforeach
              </ul>
              <ul id="shilka" style="display: none;">
                @foreach($course2_lessons as $lessonKey=>$lesson)
                  <li>{{$lesson->lesson_name}}</li>
                @endforeach
              </ul>
              <ul id="zu232" style="display: none;">
                @foreach($course1_lessons as $lessonKey=>$lesson)
                  <li>{{$lesson->lesson_name}}</li>
                @endforeach
              </ul>
            </div> --}}
          </div>
        </div>
        <script>
          function getMessage(str) {
            $courses_block = document.getElementById('courses-list');
            $models_block = document.getElementById('3d-models');
            $course1 = document.getElementById('strela');
            $course2 = document.getElementById('shilka');
            $course3 = document.getElementById('zu232');
            if(str == 'courses'){
              if($models_block.style.display == "block"){
                $models_block.style.display = "none";
              }
              $courses_block.style.display = "block";
              if(str == '4'){
                $course1.style.display = "block";
              }
            }
            else if(str == '3d'){
              if($courses_block.style.display == "block"){
                $courses_block.style.display = "none";
              }
              $models_block.style.display = "block";
            }
          }
       </script>
      </div>
      </main>
    </div>
    <script>
      function changeContent(content_stuff){
          $3d = document.getElementById('content-header');
          if(content_stuff == "3d"){
            $3d.innerHtml = 'hello';
          }
      }
    </script>
    {{-- <footer class="footer">
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
    </footer> --}}
</body>
</html>