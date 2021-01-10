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
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\OrganisasiController;
use App\Http\Controllers\Api\PengurusOrganisasiController;

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
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Orion::resource('user', UserController::class)->withSoftDeletes();
    });
    
    Orion::resource('profile', UserProfileController::class)->withSoftDeletes();
    Orion::resource('pekerjaan', PekerjaanController::class);
    Orion::resource('klasis', KlasisController::class);
    Orion::resource('wilayah', WilayahController::class);
    Orion::resource('jemaat', JemaatController::class);
    Orion::resource('keluarga', KeluargaController::class);
    Orion::resource('anggota-keluarga', AnggotaKeluargaController::class);
    Orion::resource('majelis', MajelisController::class);
    Orion::resource('berita', BeritaController::class);
    Orion::resource('informasi', InformasiController::class);
    Orion::resource('category', CategoryController::class);
    Orion::resource('event', EventController::class);
    Orion::resource('about', OrganisasiController::class);
    Orion::resource('oig', AboutController::class);
    Orion::resource('pengurus', PengurusOrganisasiController::class);
});

Route::post('/login', [AuthController::class, 'login']);