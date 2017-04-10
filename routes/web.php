<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();



Route::get( '/', 'MainController@index');
Route::get('/home', 'HomeController@index');
Route::resource('registration', 'RegisterController');
Route::resource('/forgot', 'ForgotController');
Route::get('/logout', 'LogOutController@logout');
Route::post('/login', 'LoginController@login');
Route::post('/register2', 'RegisterController@store2');
Route::post('/register3', 'RegisterController@store3');
Route::get('/auth_401', "ErrorController@err_401");
Route::resource('/contact_us', 'FeedbackController');
Route::get('/competition/{id}', 'CompetitionController@show');
Route::post('/competition/{id}', 'CompetitionController@check');
Route::get('/competition/{id}/participants', 'CompetitionController@participants');
Route::get('/competition/{id}/judges', 'CompetitionController@judges');
Route::get('/ranking', 'RankingController@index');
Route::get('/shop', 'ShopController@index');

Route::group(['middleware' => 'auth'], function () {
Route::resource('/profile', 'ProfileController');
Route::post('/profile/update/{id}', 'ProfileController@update');
Route::get('/add_sportsman','SportsmenController@create');
Route::post('/add_sportsman','SportsmenController@store');
Route::resource('/sportsman', 'SportsmenController');
Route::get('/make_competition', 'CompetitionController@create');
Route::post('/make_competition', 'CompetitionController@store');
Route::get('/make_training', 'TrainingController@create');
Route::post('/make_training', 'TrainingController@store');
Route::get('/make_pumce', 'PumceController@create');
Route::post('/make_pumce', 'PumceController@store');
Route::get('/make_seminar', 'SeminarController@create');
Route::post('/make_seminar', 'SeminarController@store');
Route::get('/search', 'SearchController@index');
Route::post('/search', 'SearchController@find');
Route::get('/competition/{id}/participate', 'CompetitionController@participate');
Route::post('/competition/{id}/add_sportsmans', 'CompetitionController@add_sportsman');
Route::get('/competition/{id}/quit', 'CompetitionController@quit');
Route::get('/competition/{id}/judge_participate', 'CompetitionController@judge_participate');
Route::post('/competition/{id}/judge_participate', 'CompetitionController@judge_pass');
Route::get('/competition/{id}/judge_quit', 'CompetitionController@judge_quit');
Route::get('/competition/{id}/result_add', 'CompetitionController@result_add');
Route::post('/competition/{id}/result_add', 'CompetitionController@result_store');
Route::get('/competition/{id}/result_index', 'CompetitionController@result_index');
Route::get('/competition/{id}/change', 'CompetitionController@change_index');
Route::post('/competition/{id}/change', 'CompetitionController@change');
Route::get('/competition/{id}/change_competition', 'CompetitionController@change_competition');
Route::post('/competition/{id}/change_competition', 'CompetitionController@update');
Route::post('/competition/{id}/change_pumce', 'PumceController@update');
Route::post('/competition/{id}/change_seminar', 'SeminarController@update');
Route::post('/competition/{id}/change_training', 'TrainingController@update');
Route::get('/shop/add', 'ShopController@create');
});
Route::get('elfinder',function(){
return view('ckeditor.elfinder');
});
Route::get('connector','elfinder\ElfinderController@connector');
Route::post('connector','elfinder\ElfinderController@connector');
