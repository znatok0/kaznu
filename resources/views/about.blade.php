@extends("layouts.app")

@section("content")

<div class="img">
    <img src="./img/top-image.png" alt="top-image" class="img-image" />
  </div>
  <main class="info-container">
    <div class="shirt-info">
      <p class="shirt-info-text">Наша кафедра это:</p>
      <div class="shirt-info-cards">
        <div class="shirt-info-card shirt-info-card-mr">
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
      <p class="study-info-text">
        Специальности, доступные на данный момент:
      </p>
      <div class="study-info-cards">
        <a
          href="#pvo"
          class="study-info-card study-info-card-title study-info-card-active"
          >ПВО</a
        >
        <a href="#" class="study-info-card study-info-card-title">Мотострелковых подразделения</a>
        <a href="#" class="study-info-card study-info-card-title">Воспитательные структуры</a>
        <a href="#" class="study-info-card study-info-card-title">Военные юристы</a>
        <a href="#" class="study-info-card study-info-card-title">Военные психологи</a>
      </div>
    </div>
    <div class="study-content" id="pvo">
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
          At vero eos et accusamus et iusto odio dignissimos ducimus qui
          blanditiis praesentium voluptatum deleniti atque corrupti quos
          dolores et quas molestias excepturi sint occaecati cupiditate non
          provident, similique sunt in culpa qui officia deserunt mollitia
          animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis
          est et expedita distinctio. Nam libero tempore, cum soluta nobis est
          eligendi optio cumque nihil impedit quo
        </p>
      </div>
    </div>
    <div class="gallery">
      <p class="gallery-text">Фотогалерея</p>
        
    </div>
  </main>

@endsection