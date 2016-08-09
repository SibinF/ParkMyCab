<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
	$people=['Sibin','Amal','Chicku','Shintu'];

	return view('PagesControl',compact('people'));


});*/

//Route::get('/','PagesController@index');
Route::auth();

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('page', 'PagesController@index');
Route::get('model_view', 'PagesController@model_view');
Route::get('pages/model_view', [
    'as' => 'model', 'uses' => 'PagesController@model_view'
]);
Route::get('countries/index', 'CountriesController@index');
Route::get('countries/add_country', 'CountriesController@add_view');
Route::get('countries/show', 'CountriesController@show');
Route::post('countries/create', 'CountriesController@create');
Route::get('countries/update/{id}', 'CountriesController@update');

Route::get('countries/edit_country/{id}', 'CountriesController@edit_view');
Route::get('countries/delete_country/{id}', 'CountriesController@delete_view');
Route::get('countries/delete/{id}', 'CountriesController@delete');


