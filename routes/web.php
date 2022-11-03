<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StaticPagesController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/tin-tuc', [ArticlesController::class, 'index']);

Route::get('/giai-phap', [ProductsController::class, 'index']);

Route::get('/gioi-thieu', fn () => view('gioi-thieu'));

Route::get('/doi-tac', fn () => view('doi-tac'));

Route::get('/lien-he', fn () => view('contact'));

Route::get('/{slug}', [StaticPagesController::class, 'show'])->where('slug', '^(?!nova|nova-api|nova-vendor).*$');
