<?php
use App\Http\Controllers\NewsController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('pages.home');

Route::get('/', [PageController::class , 'index'])->name('pages.welcome');

// Route::get('/news', [NewsController::class , 'index'])->name('pages.show_news');

Route::get('/news/{slug}', [NewsController::class, 'index'])->name('pages.show_news');

Route::get('/news', [NewsController::class, 'showAllNews'])->name('pages.news');