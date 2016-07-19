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
Route::get('/projects/{id}/settings', 'ProjSettingsController@index')->name('proj_settings');
Route::get('/projects/new', 'ProjCreateController@index')->name('proj_create');
Route::get('/projects/{id}/credentials', 'ProjCredentialsController@index')->name('proj_credentials');
Route::get('/projects/{id}/credentials/api/create-key', 'ProjCredentialsController@createApiKeyView');
Route::get('/projects/{id}/credentials/clientid/create', 'ProjCredentialsController@createClientIdView');
Route::get('/projects/{id}/consent-screen', 'ProjCScreenController@index')->name('proj_consent');
// ^^here's too!!!^^
//vvvv Gonna need some middleware around here vvvv
Route::get('/admin/home', 'AdminHomeController@index');
Route::get('/admin/users', 'AdminUsersController@index');
Route::get('/admin/projects', 'AdminProjectsController@index');
Route::get('/admin/groups', 'AdminGroupsController@index');
Route::get('/admin/users/{uid}', 'AdminUsersController@usersDetailView');
Route::get('/admin/groups/{gid}', 'AdminGroupsController@groupsPermissionsView');
Route::get('/admin/api-list','AdminApiListController@index');
Route::get('/admin/api-list/forum', 'AdminApiListController@forumApiView');