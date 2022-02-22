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

Route::get('/', function () {
    echo 'Hi! Welcome To Laravel';
});
Route::get('/about', function () {
    return 'Name : Amalia Nuraini - NIM : 2041720160 - Class : TI 2I';
});
Route::get('/articles/{id}', function ($id) {
    return 'This is Article Pages with ID: ' .$id;
});
