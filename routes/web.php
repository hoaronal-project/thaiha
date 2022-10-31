<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StaticPagesController;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});

Route::get('/tin-tuc', [ArticlesController::class, 'index']);

Route::get('/giai-phap', [ProductsController::class, 'index']);

Route::get('/gioi-thieu', fn () => view('gioi-thieu'));

Route::get('/doi-tac', fn () => view('doi-tac'));

Route::get('/lien-he', fn () => view('contact'));

Route::get('/{slug}', [StaticPagesController::class, 'show'])->where('slug', '^(?!nova|nova-api|nova-vendor).*$');
