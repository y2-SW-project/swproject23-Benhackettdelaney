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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/movies', App\Http\Controllers\MoviesAndShowsController::class)->names('movies');
Route::get('/movies', [App\Http\Controllers\newreleasesController::class, 'show'])->name('home.blade.php');
// Route::resource('/newreleases', App\Http\Controllers\newreleasesController::class)->names('newreleases');

Route::get('/movies/create', [App\Http\Controllers\MoviesAndShowsController::class, 'create'])->name('movies.create');
Route::get('/movies/{movie}', [App\Http\Controllers\MoviesAndShowsController::class, 'show'])->name('movies.show');
Route::get('/movies/{movie}/edit', [App\Http\Controllers\MoviesAndShowsController::class, 'edit'])->name('movies.edit');
Route::post('/movies', [App\Http\Controllers\MoviesAndShowsController::class, 'store'])->name('movies.store');

Route::delete('/movies/{movie}', [App\Http\Controllers\MoviesAndShowsController::class, 'destroy'])->name('movies.destroy');

Route::get('/newreleases', [App\Http\Controllers\newreleasesController::class, 'index'])->name('newreleases.index');
Route::get('/newreleases/create', [App\Http\Controllers\newreleasesController::class, 'create'])->name('newreleases.create');
Route::get('/newreleases/{movie}', [App\Http\Controllers\newreleasesController::class, 'show'])->name('newreleases.show');
Route::get('/newreleases/{movie}/edit', [App\Http\Controllers\newreleasesController::class, 'edit'])->name('newreleases.edit');
Route::post('/newreleases', [App\Http\Controllers\newreleasesController::class, 'store'])->name('newreleases.store');
Route::delete('/newreleases/{movie}', [App\Http\Controllers\newreleasesController::class, 'destroy'])->name('newreleases.destroy');