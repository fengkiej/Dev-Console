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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/projects/{id}/settings', 'ProjSettingsController@index');
Route::get('/projects/new', 'ProjCreateController@index');
Route::get('/projects/{id}/credentials', 'ProjCredentialsController@index');
Route::get('/projects/{id}/credentials/api/create-key', 'ProjCredentialsController@createApiKeyView');
Route::get('/projects/{id}/consent-screen', 'ProjCScreenController@index');
