<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\myblog;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::resource('articles', ArticlesController::class);

Route::get('/', [myblog ::class, 'index'])->name('index');

Route::get('works', [myblog ::class, 'works'])->name('works');

Route::get('posts', [myblog ::class, 'posts'])->name('posts');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

