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


Route::get('/','Supervisor\WelcomeController@index')->name('supervisor.welcome');


Route::prefix('/supervisor')->name('supervisor.')->namespace('Supervisor')->group(function(){
    Route::namespace('Auth')->group(function(){

        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        Route::post('/register','RegisterController@register');
    });

    
    Route::get('/mainpanel','MainpanelController@index')->name('mainpanel');
    Route::get('/studentpanel/{student_id}', 'StudentpanelController@index');
});

Route::prefix('/student')->name('student.')->namespace('Student')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::post('/login','LoginController@login');
        Route::get('/logout','LoginController@logout')->name('logout');
        Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        Route::post('/register','RegisterController@register');
    });
    Route::get('/welcome',function(){
        return view('student.welcome');
    })->name('welcome');
    Route::get('/mainpanel','MainpanelController@index')->name('mainpanel');
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::post('/profile','ProfileController@setProfilePicture');
});

Route::prefix('/propaideia')->namespace('Course\Propaideia')->group(function(){
    Route::get('/{part}/t', 'TestController@showTest');
    Route::post('/{part}/t', 'TestController@answerTest');
    Route::get('/{part}/{section}', 'LessonController@showLecture');
    Route::get('/index', 'CourseController@index');
});

