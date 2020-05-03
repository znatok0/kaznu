<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/students', function(){
    return view('students');
})->name('students');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/shilka', function(){
        return view('shilka');
    })->name('shilka');
    Route::get('/strela', function(){
        return view('strela');
    })->name('strela');
    Route::get('/zsu23-2', function(){
        return view('zsu232');
    })->name('zsu23-2');
    Route::get('/courses','PagesController@course_list')->name('courses');
    Route::get('/lesson/{course_id}/{lesson_id}','PagesController@lesson_info')->name('lesson');
    Route::get('/test/{course_id}/{lesson_id}', 'PagesController@test_info')->name('test');
});