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

Route::get('/', function () {
    return 'laravel test index route3';
});
Route::get('/abc', function () {
    return 'laravel test index route2';
});

Route::resource('projects', 'ProjectsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);