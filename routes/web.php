<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\dokterController;

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
    return view('0094home');
});
Route::get('/0094dokter', function () {
    return view('0094dokter');
});
Route::get('/0094pasien', function () {
    return view('0094pasien');
});
Route::get('/0094kamar', function () {
    return view('0094kamar');
});
Route::get('/0094user', function () {
    return view('0094user');
});
Route::get('/0094/dokter_tambah', function () {
    return view('dokter_tambah');
});
Route::get('/0094pasien/pasien_tambah', function () {
    return view('pasien_tambah');
});
Route::get('/0094/kamar_tambah', function () {
    return view('kamar_tambah');
});
Route::get('/0094user/user_tambah', function () {
    return view('user_tambah');
});
Route::resource('dokter', 'app\Http\Controllers\dokterController::class');
