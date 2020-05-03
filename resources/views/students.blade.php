@extends('layouts.app')

@section('content')
  <div class="img">
    <img src="img/top-image.png" alt="top-image" class="img-image" />
  </div>
  <main class="main main-container">
    <h2 class="title-students">О порядке поступления на военную кафедру в 2021 учебном году</h2>
    <div class="student-info">
    <div id="accordeon">
      <div class="acc-head">
        Когда срок приема заявлений?
      </div>
      <div class="acc-body">
        Срок приема заявлений на поступление в военную кафедру с 12 февраля по 20 мая 2021-го года.
      </div>
      <div class="acc-head">
        Что надо иметь при себе?
      </div>
      <div class="acc-body">
        <ul class="acc-ul">
          <li class="acc-li">приписное свидетельство (оригинал и копию);</li>
          <li class="acc-li">удостоверение личности (оригинал и копию);</li>
          <li class="acc-li">зачетную книжку или студенческий билет;</li>
          <li class="acc-li">справка о наличии либо отсутствии судимости;</li>
          <li class="acc-li">фотографию 3х4 - 1 шт.</li>
        </ul>
      </div>
      <div class="acc-head">
        Где пройти медицинское обследование (мед. комиссия)?
      </div>
      <div class="acc-body">
        По месту приписки в управлениях по делам обороны (военкоматах) в срок до 31 мая 2021 года.
      </div>
      <div class="acc-head">
        Где сдается профессионально-психологический тест?
      </div>
      <div class="acc-body">
        Прохождение профессионально-психологического отбора и проверка физической подготовленности студентов будет проводиться на военной кафедре. Сроки проведения профессионально-психологического тестирования и физической подготовки будут сообщены дополнительно.
      </div>  
    </div>
    <img src="./img/soldier.svg" alt="soldier" class="soldier">
    </div>

    <h2 class="title-tables">Нормативы по физической подготовке</h2>
    <div class="table-info" style="background-color:#f9fafc;">
      <div class="table-title">
        <h4 class="table-title-text">Для студентов – юношей </h4>
        <h4 class="table-title-text">Для студентов – девушек</h4>
      </div>
      <div class="tables">
        <table class="table_light table-margin_first">
          <tr>
            <th>Упражнения, оценка</th>
            <th>5</th>
            <th>4</th>
            <th>3</th>
          </tr>
          <tr>
            <td>Бег на 100 м, с</td>
            <td>14,2</td>
            <td>14,5</td>
            <td>15,0</td>
          </tr>
          <tr>
            <td>Бег на 3000 м, мин</td>
            <td>13,00</td>
            <td>15,00</td>
            <td>16,00</td>
          </tr>
          <tr>
            <td>Подтягивание на высокой перекладине, кол-во</td>
            <td>12</td>
            <td>10</td>
            <td>8</td>
          </tr>
        </table> 
        <table class="table_light table-margin_second">
          <tr>
            <th>Упражнения, оценка</th>
            <th>5</th>
            <th>4</th>
            <th>3</th>
          </tr>
          <tr>
            <td>Бег на 100 м, с</td>
            <td>16,0</td>
            <td>16,5</td>
            <td>17,0</td>
          </tr>
          <tr>
            <td>Бег на 2000 м, мин</td>
            <td>10,00</td>
            <td>11,3</td>
            <td>12,2</td>
          </tr>
          <tr>
            <td>Поднимание туловища из положения лёжа на спине, кол-во</td>
            <td>25</td>
            <td>20</td>
            <td>15</td>
          </tr>
        </table>   
      </div>  
    </div>

    <h2 class="title-teachers">Руководство кафедры</h2>
    <div class="boss-info">
      <div class="boss-cards">  
        <div class="boss-card">
          <img src="./img/boss-3.jpg" alt="boss-3" class="boss-img">
          <p class="boss-text">Заместитель начальника военной кафедры, <br>полковник <br> Тоекин Мурат Рафихулы</p>
        </div>  
        <div class="boss-card">
          <img src="./img/boss-1.jpg" alt="boss-1" class="boss-img">
          <p class="boss-text">Начальник военной кафедры, <br>полковник <br> Ажимов Олег Вали-Ахметович</p>
        </div>    
        <div class="boss-card">
          <img src="./img/boss-2.jpg" alt="boss-2" class="boss-img">
          <p class="boss-text">Заместитель начальника военной кафедры, <br>полковник <br> Скоков Олег Юрьевич</p>
        </div>
      </div>
    </div>

  </main>
@endsection