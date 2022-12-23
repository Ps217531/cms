<?php

use Illuminate\Support\Collection;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HeaderController;
// Register Twill routes here eg.
// Route::module('posts');
Route::module('homepages');

Route::get('homepage/edit', [HomepageController::class , 'edit'])->name('homepage.edit')->defaults('id', 1);

Route::module('footers');

Route::get('footer/edit', [FooterController::class , 'edit'])->name('footer.edit')->defaults('id', 1);

Route::module('headers');

Route::get('header/edit', [HeaderController::class , 'edit'])->name('header.edit')->defaults('id', 1);

Route::module('news');

// /////////////////////////////////////////////////////////////////////

Route::module('pages');

Route::module('posts');


