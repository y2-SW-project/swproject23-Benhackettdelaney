<?php


use App\Http\Controllers\User\MoviesAndShowsController as UserMoviesAndShowsController;
use App\Http\Controllers\Admin\MoviesAndShowsController as AdminMoviesAndShowsController;
use App\Http\Controllers\Admin\newreleasesController as AdminnewreleasesController;
use App\Http\Controllers\User\newreleasesController as UsernewreleasesController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'newreleasesIndex'])->name('home.newreleases.index');
// Route::get('/home/movies', [App\Http\Controllers\HomeController::class, 'movieIndex'])->name('home.movies.index');
Route::resource('/admin/movies', App\Http\Controllers\AdminMoviesAndShowsController::class)->middleware(['auth'])->names('admin.movies');
Route::resource('/user/movies', App\Http\Controllers\UserMoviesAndShowsController::class)->middleware(['auth'])->names('user.movies')->only(['index', 'show']);;

Route::resource('/admin/newreleases', App\Http\Controllers\AdminnewreleasesController::class)->middleware(['auth'])->names('admin.newreleases');
Route::resource('/user/newreleases', App\Http\Controllers\UsernewreleasesController::class)->middleware(['auth'])->names('user.newreleases')->only(['index', 'show']);;
// // Route::get('/admin/movies', [App\Http\Controllers\AdminnewreleasesController::class, 'show'])->name('admin.movies.index');
// Route::get('/user/movies', [App\Http\Controllers\UsernewreleasesController::class, 'show'])->name('user.movies.index');
// Route::resource('/newreleases', App\Http\Controllers\newreleasesController::class)->names('newreleases');

// Route::get('/admin/movies/create', [App\Http\Controllers\AdminMoviesAndShowsController::class, 'create'])->name('admin.movies.create');
// Route::get('/admin/movies/{movie}', [App\Http\Controllers\AdminMoviesAndShowsController::class, 'show'])->name('admin.movies.show');
// Route::get('/admin/movies/{movie}/edit', [App\Http\Controllers\AdminMoviesAndShowsController::class, 'edit'])->name('admin.movies.edit');
// Route::post('/admin/movies', [App\Http\Controllers\AdminMoviesAndShowsController::class, 'store'])->name('admin.movies.store');
// Route::delete('/admin/movies/{movie}', [App\Http\Controllers\AdminMoviesAndShowsController::class, 'destroy'])->name('admin.movies.destroy');

// Route::resource('/admin/newreleases', AdminnewreleasesController::class)->middleware(['auth'])->names('admin.newreleases');

// Route::get('/admin/newreleases', [App\Http\Controllers\AdminnewreleasesController::class, 'index'])->name('admin.newreleases.index');
// Route::get('/admin/newreleases/create', [App\Http\Controllers\AdminnewreleasesController::class, 'create'])->name('admin.newreleases.create');
// Route::get('/admin/newreleases/{movie}', [App\Http\Controllers\AdminnewreleasesController::class, 'show'])->name('admin.newreleases.show');
// Route::get('/admin/newreleases/{movie}/edit', [App\Http\Controllers\AdminnewreleasesController::class, 'edit'])->name('admin.newreleases.edit');
// Route::post('/admin/newreleases', [App\Http\Controllers\AdminnewreleasesController::class, 'store'])->name('admin.newreleases.store');
// Route::delete('/admin/newreleases/{movie}', [App\Http\Controllers\AdminnewreleasesController::class, 'destroy'])->name('admin.newreleases.destroy');

// Route::get('/user/movies/create', [App\Http\Controllers\UserMoviesAndShowsController::class, 'create'])->name('user.movies.create');
// Route::get('/user/movies/{movie}', [App\Http\Controllers\UserMoviesAndShowsController::class, 'show'])->name('user.movies.show');
// Route::get('/user/movies/{movie}/edit', [App\Http\Controllers\UserMoviesAndShowsController::class, 'edit'])->name('user.movies.edit');
// Route::post('/user/movies', [App\Http\Controllers\UserMoviesAndShowsController::class, 'store'])->name('movies.store');
// Route::delete('/user/movies/{movie}', [App\Http\Controllers\UserMoviesAndShowsController::class, 'destroy'])->name('user.movies.destroy');

// Route::get('/user/newreleases', [App\Http\Controllers\UsernewreleasesController::class, 'index'])->name('user.newreleases.index');
// Route::get('/user/newreleases/create', [App\Http\Controllers\UsernewreleasesController::class, 'create'])->name('user.newreleases.create');
// Route::get('/user/newreleases/{movie}', [App\Http\Controllers\UsernewreleasesController::class, 'show'])->name('user.newreleases.show');
// Route::get('/user/newreleases/{movie}/edit', [App\Http\Controllers\UsernewreleasesController::class, 'edit'])->name('user.newreleases.edit');
// Route::post('/user/newreleases', [App\Http\Controllers\UsernewreleasesController::class, 'store'])->name('user.newreleases.store');
// Route::delete('/user/newreleases/{movie}', [App\Http\Controllers\UsernewreleasesController::class, 'destroy'])->name('user.newreleases.destroy');