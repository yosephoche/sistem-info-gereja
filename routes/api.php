<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\UserProfileController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PekerjaanController;
use App\Http\Controllers\Api\KlasisController;
use App\Http\Controllers\Api\AnggotaKeluargaController;
use App\Http\Controllers\Api\JemaatController;
use App\Http\Controllers\Api\KeluargaController;
use App\Http\Controllers\Api\MajelisController;
use App\Http\Controllers\Api\WilayahController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\InformasiController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['as' => 'api.'], function() {
    Orion::belongsToResource('profile', 'user', UserProfileController::class)->withSoftDeletes();
    // Orion::hasOneResource('user', 'profile', UserController::class)->withSoftDeletes();
    Orion::resource('user', UserController::class)->withSoftDeletes();

    Orion::resource('pekerjaan', PekerjaanController::class);
    Orion::resource('klasis', KlasisController::class);
    Orion::resource('wilayah', WilayahController::class);
    Orion::resource('jemaat', JemaatController::class);
    Orion::resource('keluarga', KeluargaController::class);
    Orion::resource('anggota-keluarga', AnggotaKeluargaController::class);
    Orion::resource('majelis', MajelisController::class);
    // Orion::resource('berita', BeritaController::class);
    // Orion::resource('informasi', InformasiController::class);
    // Orion::resource('category', CategoryController::class);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthController::class, 'login']);