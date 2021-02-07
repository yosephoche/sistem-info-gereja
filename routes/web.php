<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\EventController;
use App\Http\Controllers\Front\OrganisasiController;
use App\Http\Controllers\Front\BlogController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profile'])->name('profile');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/event/{id}', [EventController::class, 'detail'])->name('event.detail');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('/oig', [OrganisasiController::class, 'index'])->name('oig');
Route::get('/oig/{id}', [OrganisasiController::class, 'detail'])->name('oig.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
