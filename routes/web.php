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


Route::get('/', [\App\Http\Controllers\HomeController::class, '_invoke'])->name('home');
Route::get('topic/{id}', [\App\Http\Controllers\HomeController::class, 'topic'])->name('topic');
Route::get('news/{id}', [\App\Http\Controllers\HomeController::class, 'news'])->name('news');

require __DIR__ . '/auth.php';
