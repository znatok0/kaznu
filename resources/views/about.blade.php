@extends("layouts.app")

@section("content")
  <div class="img">
    <img src="img/top-image.png" alt="top-image" class="img-image" />
  </div>
  <main class="info-container">
    <div class="shirt-info">
      <h2 class="shirt-info-text">Наша кафедра это:</h2>
      <div class="shirt-info-cards">
        <div class="shirt-info-card shirt-info-card-mr">
          <span class="shirt-info-card-title">86 лет</span>
          <p class="shirt-info-card-text">
            функционирования
          </p>
        </div>

        <div class="shirt-info-card">
          <span class="shirt-info-card-title">Тысячи</span>
          <p class="shirt-info-card-text">
            именитых выпускников
          </p>
        </div>

        <div class="shirt-info-card">
          <span class="shirt-info-card-title">100500</span>
          <p class="shirt-info-card-text">
            Lorem ipsum dolor sit amet, consectetur
          </p>
        </div>

        <div class="shirt-info-card">
          <span class="shirt-info-card-title">100500</span>
          <p class="shirt-info-card-text">
            Lorem ipsum dolor sit amet, consectetur
          </p>
        </div>
      </div>
    </div>
    <div class="study-info">
      <h2 class="study-info-text">
        Специальности, доступные на данный момент:
      </h2>
      <div class="study-info-cards">
        <a
          href="#pvo"
          class="study-info-card study-info-card-title study-info-card-active"
          >ПВО</a
        >
        <a href="#mp" class="study-info-card study-info-card-title">Мотострелковые подразделения</a>
        <a href="#vs" class="study-info-card study-info-card-title">Воспитательные структуры</a>
        <a href="#vu" class="study-info-card study-info-card-title">Военные юристы</a>
        <a href="#vp" class="study-info-card study-info-card-title">Военные психологи</a>
      </div>
    </div>
    <div class="study-content visible" id="pvo">
      <p class="study-content-text">
        Кафедра ПВО СВ предназначена для подготовки инженеров по специальности «Радиотехника и инжиниринг в военном деле», с квалификацией «Войсковая противовоздушная оборона» для подразделений и частей ПВО СВ, вооруженных комплексами ближнего действия ЗСУ-23-4 «Шилка», 9К35 «Стрела-10», ПЗРК «Игла», зенитная установка ЗУ-23-2, а также АСУ ПУ-12, ППРУ 9С80 и РЛС П-19.
      </p>
    </div>
    <div class="study-content" id="mp">
      <p class="study-content-text">
       Военная подготовка студентов имеет цель подготовить офицеров запаса для Вооруженных Сил, других войск и воинских формирований  Республики Казахстан, способных в военное время выполнять задачи на должностях командиров младшего командного звена, беззаветно преданных своему Отечеству, народу Казахстана и законно избранному Президенту – Верховному Главнокомандующему Вооруженными Силами Республики Казахстан.
      </p>
    </div>
    <div class="study-content" id="vs">
      <p class="study-content-text">
        Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
      </p>
    </div>
    <div class="study-content" id="vu">
      <p class="study-content-text">
       Юридический факультет Казахского национального университета имени аль-Фараби является основной кузницей подготовки и воспитания юридического корпуса нашего государства. Большинство юристов выпускников КазНУ проходили обучения на военной кафедре нашего университета.
      </p>
    </div>
     <div class="study-content" id="vp">
      <p class="study-content-text">
        Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
      </p>
    </div>
    <div class="video-info">
      <div class="video-content">
        <iframe
          width="560"
          height="315"
          src="https://www.youtube-nocookie.com/embed/AxfsJhMRdXA?start=47"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div class="video-text">
        <p class="text">
          Военная кафедра была образована в 1934 году с целью подготовки военно-обученного резерва для соединений и частей Красной Армии, что было обусловлено сложным внешнеполитическим положением государства в связи с нарастанием угрозы фашистского нападения и провокационными  действиями японских милитаристов на Дальнем Востоке <br><br> С момента образования Вооруженных Сил Республики Казахстан проведена реорганизация всех учебных и служебных помещений кафедры, получены и освоены новые образцы вооружения и военной техники, усовершенствована методика преподавания и обучения студентов.
        </p>
      </div>
    </div>
    <div class="gallery">
      <h2 class="gallery-text">Фотогалерея</h2>
      <div class="gallery-items">
        <a data-fancybox="gallery-items" href="./img/img-g1.jpg"><img src="./img/img-g1.jpg" alt="1" class="gal-img"></a>
        <a data-fancybox="gallery-items" href="./img/img-g2.jpg"><img src="./img/img-g2.jpg" alt="2" class="gal-img"></a>
        <a data-fancybox="gallery-items" href="./img/img-g3.jpg"><img src="./img/img-g3.jpg" alt="3" class="gal-img"></a>
        <a data-fancybox="gallery-items" href="./img/img-g4.jpg"><img src="./img/img-g4.jpg" alt="4" class="gal-img"></a>
        <a data-fancybox="gallery-items" href="./img/img-g5.jpg"><img src="./img/img-g5.jpg" alt="5" class="gal-img"></a>
        <a data-fancybox="gallery-items" href="./img/img-g6.jpg"><img src="./img/img-g6.jpg" alt="6" class="gal-img"></a>
      </div>
    </div>
  </main>

@endsection