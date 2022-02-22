<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;

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

Route::get('/', function () {
    echo 'Hi! Welcome To Laravel';
});
Route::get('/about', function () {
    return 'Name : Amalia Nuraini - NIM : 2041720160 - Class : TI 2I';
});
Route::get('/articles/{id}', function ($id) {
    return 'This is Article Pages with ID: ' .$id;
});


// practicum 2

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// practicum 2 (5)
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// practicum 3

// 1 - Route Home Page

Route::get('/', function(){
    return redirect('https://www.educastudio.com/');
});

// 2. Route Prefix Category

Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });

    Route::get('/riri-story-books', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });

    Route::get('/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

// 3. Route News Page

Route::get('news', function(){
    return redirect('https://www.educastudio.com/news');
});

Route::get('news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' . $title);
});

// 4. Route Prefix Program

Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);

    Route::get('/magang', [ProgramController::class, 'magang']);

    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

// 5 - Route About Us

Route::get('/about-us', function(){
    return redirect('https://www.educastudio.com/about-us');
});