<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get('/about', function () {
//     return 'NIM: 2241727024 <br> Nama : Muhammad Akita Jabbar Razzaq <br> Kelas : Web-B';
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel ini dengan id ' . $id;
// });

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//Route::get('/', [HomeController::class, 'index']);

//Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);
