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

// app()->bind('example', function ()
// {
// 	return new \App\Example;
// });

// app()->singleton('example', function ()
// {
// 	return new \App\Example;
// });

Route::get('/example',function ()
{
	//dd(app('example'),app('example'));
	dd(app('App\Example'),app('App\Example'));
});

Route::resource('/projects','ProjectsController');
Route::get('/api/projects','ProjectsController@paginate');
Route::get('/','PagesController@home');

Route::patch('/tasks/{task}','ProjectTasksController@update');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

// Route::get('/projects','ProjectsController@index');
// Route::get('/projects/create','ProjectsController@create');
// Route::get('/projects/{project}}','ProjectsController@show');
// Route::post('/projects','ProjectsController@store');
// Route::get('/projects/{project}}/edit','ProjectsController@edit');
// Route::patch('/projects/{project}}','ProjectsController@update');
// Route::delete('/projects/{project}}','ProjectsController@destroy');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
