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
GET /projects/1  Show
PUT | PATCH   /projects/1   Update
DELETE projects/1    Destroy
POST   /projects     Create a New Project
GET /projects/1/edit   Display Form

*/
Route::get('formuser/', function () {
    return view('formuser');
});


//Route::resource('projects','ProjectController');
Route::get('/projects', "ProjectController@index");
Route::get('/projects/create', "ProjectController@create");
Route::post('/projects', "ProjectController@store");
Route::patch('/projects/{project}',"ProjectController@update");
Route::get('/projects/{project}/edit',"ProjectController@edit");
Route::get('/projects/{project}',"ProjectController@show"); //To display a given project
Route::get('/f','item@data');
Route::get('/form','item@form');
Route::get('/formdata','item@formdata');

Route::get('/website', function () {
    return view('website');

});
Route::get('/Login', function () {
    return view('Login');

});
 Route::get('/posts',"PostController@index");
Route::get('/posts/create',"PostController@create");
 Route::post('/posts',"PostController@store");

Route::resource('projects','ProjectController');
Route::get('/projects', "ProjectController@index");
Route::get('/projects/create', "ProjectController@create");
Route::post('/projects', "ProjectController@store");
Route::patch('/projects/{project}',"ProjectController@update");
Route::get('/projects/{project}/edit',"ProjectController@edit");
Route::get('/projects/{project}',"ProjectController@show"); //To display a given project
Route::get('/f','item@data');
Route::get('/form','item@form');
Route::get('/formdata','item@formdata');
Route::get('/website', function () {
    return view('website');

});
Route::get('/Login', function () {
    return view('Login');

});
Route::get('/website', function () {
    return view('website');

});
Route::get('/BD',function(){
	return view('BD');
});
Route::get('/apply',function(){
	return view('apply');
});