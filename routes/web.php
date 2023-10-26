<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/cv', function () {
    return view('cv');
});
Route::get('/profile_paeja', function () {
    return view('profile_paeja');
});

Route::get('/siswa/daftarsiswa', [SiswaController::class, 'index'])->name('daftarsiswa');
Route::get('/siswa/tambahsiswa', [SiswaController::class, 'createForm'])->name('tambahsiswa');
Route::post('/siswa/buatsiswa', [SiswaController::class, 'create'])->name('buatsiswa');
Route::get('/siswa/editsiswa/{id}', [SiswaController::class, 'editForm'])->name('editsiswa');
Route::put('/siswa/editsiswa/{id}', [SiswaController::class, 'update'])->name('updatesiswa');
Route::delete('/siswa/delete/${id}', [SiswaController::class, 'deleteSiswa'])->name('deletesiswa');