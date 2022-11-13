<?php

use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'beranda']);
Route::get('/profil', [LandingController::class, 'profil']);
Route::get('/visi-misi-tujuan', [LandingController::class, 'visiMisi']);
Route::get('/struktur-organisasi', [LandingController::class, 'strukturOrganisasi']);
Route::get('/tugas-dan-fungsi', [LandingController::class, 'tugasFungsi']);
Route::get('/rencana-strategis', [LandingController::class, 'rencanaStrategis']);

Route::get('/berita', [LandingController::class, 'berita']);
Route::get('/berita/detail/{id}', [LandingController::class, 'beritaDetail']);

Route::get('/pengumuman', [LandingController::class, 'pengumuman']);
Route::get('/pengumuman/detail/{id}', [LandingController::class, 'pengumumanDetail']);
