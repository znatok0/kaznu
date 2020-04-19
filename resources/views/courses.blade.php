@include('simple_html_dom')
@extends('layouts.app')

@section('content')
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
@endsection