<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\adminController;

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
    return view('welcome');
});

Route::get('/index', [adminController::class, 'index']);
// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/about', [adminController::class, 'about']);

Route::get('/category', [adminController::class, 'category']);

Route::get('/contact', [adminController::class, 'contact']);

Route::get('/search-result', [adminController::class, 'search_result']);

Route::get('/single-post', [adminController::class, 'single_post']);