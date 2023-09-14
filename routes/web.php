<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestKoneksiController;

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

Route::get('/koneksi', [TestKoneksiController::class, 'index']);