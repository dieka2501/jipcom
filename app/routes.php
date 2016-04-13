<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Auth
Route::filter('loginAuth',function(){
	if(Session::get('login')==true){
		return Redirect::to('/admin');
	}
});
Route::filter('userAuth',function(){
	if(Session::get('login')==false){
		return Redirect::to('/admin/login');
	}
});
// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// ======= MAIN
Route::get('/', 'FrontController@index');

Route::get('/contact_us', 'FrontController@contact_us');

Route::get('/foto', 'galeryController@index');
Route::get('/galery/detail/{id}', 'galeryController@detail');

Route::get('/video', 'FrontController@video_gallery');
Route::get('/video/detail', 'FrontController@video_detail');

Route::get('/news', 'neController@index');

Route::get('/news/detail/{id}', 'neController@detail');

Route::get('/register', 'registerController@index');
Route::post('/register', 'registerController@do_create');

// ======= ADMIN
Route::get('/admin', ['before'=>'userAuth','uses'=>'DashboardController@index']);
Route::get('/admin/login', ['before'=>'loginAuth','uses'=>'loginAdminController@index']);
Route::post('/admin/login', ['before'=>'loginAuth','uses'=>'loginAdminController@get_login']);
Route::get('/admin/logout', ['before'=>'userAuth','uses'=>'loginAdminController@logout']);

Route::get('/admin/member', ['before'=>'userAuth','uses'=>'DashboardController@master_member']);
Route::get('/admin/member/add',['before'=>'userAuth','uses'=>'DashboardController@master_member_form'] );

Route::get('/admin/member/level', ['before'=>'userAuth','uses'=>'DashboardController@master_member_level']);
Route::get('/admin/member/level/add', ['before'=>'userAuth','uses'=>'DashboardController@master_member_level_form']);

Route::get('/admin/registration',['before'=>'userAuth','uses'=>'DashboardController@member_registration'] );
Route::get('/admin/registration/add', ['before'=>'userAuth','uses'=>'DashboardController@member_registration_form']);

Route::get('/admin/image', ['before'=>'userAuth','uses'=>'imageAdminController@index']);
Route::get('/admin/image/add', ['before'=>'userAuth','uses'=>'imageAdminController@add']);
Route::post('/admin/image/add', ['before'=>'userAuth','uses'=>'imageAdminController@do_add']);
Route::get('/admin/image/edit/{id}', ['before'=>'userAuth','uses'=>'imageAdminController@edit']);
Route::get('/admin/image/file/delete/{id}', ['before'=>'userAuth','uses'=>'imageAdminController@delete_file']);
Route::post('/admin/image/edit', ['before'=>'userAuth','uses'=>'imageAdminController@do_edit']);
Route::get('/admin/image/delete/{id}', ['before'=>'userAuth','uses'=>'imageAdminController@del']);

Route::get('/admin/video', ['before'=>'userAuth','uses'=>'videoAdminController@index']);
Route::get('/admin/video/add', ['before'=>'userAuth','uses'=>'videoAdminController@add']);
Route::post('/admin/video/add', ['before'=>'userAuth','uses'=>'videoAdminController@do_add']);
Route::get('/admin/video/edit/{id}', ['before'=>'userAuth','uses'=>'videoAdminController@edit']);
Route::get('/admin/video/file/delete/{id}', ['before'=>'userAuth','uses'=>'videoAdminController@delete_file']);
Route::post('/admin/video/edit', ['before'=>'userAuth','uses'=>'videoAdminController@do_edit']);
Route::get('/admin/video/delete/{id}', ['before'=>'userAuth','uses'=>'videoAdminController@del']);


Route::get('/admin/newsevents', ['before'=>'userAuth','uses'=>'neAdminController@index']);
Route::get('/admin/newsevents/add', ['before'=>'userAuth','uses'=>'neAdminController@add']);
Route::post('/admin/newsevents/add', ['before'=>'userAuth','uses'=>'neAdminController@do_add']);
Route::get('/admin/newsevents/edit/{id}', ['before'=>'userAuth','uses'=>'neAdminController@edit']);
Route::get('/admin/nef/delete/{id}', ['before'=>'userAuth','uses'=>'neAdminController@delete_file']);
Route::post('/admin/newsevents/edit', ['before'=>'userAuth','uses'=>'neAdminController@do_edit']);
Route::get('/admin/newsevents/delete/{id}', ['before'=>'userAuth','uses'=>'neAdminController@del']);

Route::get('/admin/configuration', 'DashboardController@configuration');
Route::get('/admin/configuration/add', 'DashboardController@configuration_form');

Route::get('/admin/group', 'DashboardController@group');
Route::get('/group/add', 'DashboardController@group_form');

Route::get('/admin/users', 'DashboardController@users');
Route::get('/users/add', 'DashboardController@users_form');
