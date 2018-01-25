<?php

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

Route::get('/', 'FrontHomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/realisations', 'RealisationsController@index')->name('realisations');

Route::get('/contact', 'ContactController@index')->name('formContact');
Route::post('/contact', 'ContactController@contacter');

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::resource('category', 'CategoryController', ['except'=>'show']);
    Route::resource('skill', 'SkillController', ['except'=>'show']);
    Route::resource('project', 'ProjectController', ['except'=>'show']);
    Route::resource('training', 'TrainingController', ['except'=>'show']);
    Route::resource('msgcontact', 'MsgcontactController', ['except'=>'show']);
});
