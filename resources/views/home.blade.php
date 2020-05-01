@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row">
          {{-- <div class="col-sm-3 col-md-2 sidebar" id="sidebar-left">
            <ul class="nav nav-sidebar">
                <li>
                    <a href="{{ route('courses') }}" class="waves-effect waves-orange pointer">Мои курсы</a>
                    <a href="./testing.html" class="waves-effect waves-orange pointer">Учебные пособия</a>
                    <a href="./library.html" class="waves-effect waves-orange pointer" onclick="showElectronic()">Электронные издания</a>
                    @if($user_role == 1)
                        <a href="#">Список курсов</a>
                        <a href="#">Список студентов и преподавателей</a>
                    @endif
                </li>
            </ul>
          </div> --}}
          {{-- <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="row justify-content-center">
                @if($user_role == 1) 
                    <p>Личный кабинет администратора</p>
                @elseif($user_role == 2)
                    <p>Личный кабинет преподавателя</p>
                @elseif($user_role == 3)
                    <p>Личный кабинет студента</p>
                @endif           
            </div>
          </div> --}}
          <h3 id="content-header" style="text-align: center;">Гид по платформе</h3>
        </div>
      </div>
</div>
@endsection
<script src="{{ asset('js/home-js.js') }}">