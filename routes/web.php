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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'Index'])->name('siswa');
    Route::get('/tambah-siswa', [App\Http\Controllers\SiswaController::class, 'Tambah'])->name('tambahsiswa');
    Route::post('/send-siswa', [App\Http\Controllers\SiswaController::class, 'Send'])->name('send-siswa');
    Route::get('/edit-siswa/{id}', [App\Http\Controllers\SiswaController::class, 'Edit'])->name('edit-siswa');
    Route::post('/update-siswa/{id}', [App\Http\Controllers\SiswaController::class, 'Update'])->name('update-siswa');
    Route::DELETE('/delete-siswa/{id}', [App\Http\Controllers\SiswaController::class, 'Delete'])->name('delete-siswa');

});
Route::middleware(['auth', 'role:siswa'])->group(function () {

});
