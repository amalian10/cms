<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// practicum 1

// Route::get('/', function () {
//     echo 'Hi! Welcome To Laravel';
// });
// Route::get('/about', function () {
//     return 'Name : Amalia Nuraini - NIM : 2041720160 - Class : TI 2I';
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'This is Article Pages with ID: ' .$id;
// });

// practicum 2

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
