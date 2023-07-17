<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('mahasiswa', App\Http\Controllers\MahasiswaController::class);
Route::get('get-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'getMahasiswa'])->name('get.mahasiswa');

Route::resource('matkul', App\Http\Controllers\MatkulController::class);
Route::get('get-matkul', [App\Http\Controllers\MatkulController::class, 'getMatkul'])->name('get.matkul');

Route::resource('nilai', App\Http\Controllers\NilaiController::class);
Route::get('get-nilai', [App\Http\Controllers\NilaiController::class, 'getNilai'])->name('get.nilai');

Route::resource('dosen', App\Http\Controllers\DosenController::class);
Route::get('get-dosen', [App\Http\Controllers\DosenController::class, 'getDosen'])->name('get.dosen');

