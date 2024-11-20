<?php

use Illuminate\Support\Facades\Route;

//pakai model nama user
use App\Http\Controllers\senaraipengguna;
use App\Http\Controllers\senaraimurid;
use App\Http\Controllers\daftarMurid;
use App\Http\Controllers\ubahMurid;
use App\Http\Controllers\padammurid;

//get laman senaraipengguna guna controller senaraipengguna
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/senaraipengguna', [App\Http\Controllers\senaraipengguna::class, 'index'])->name('senaraipengguna');

Route::get('/listmurid', [senaraimurid::class, 'index']);

Route::post('/borangmurid', [daftarMurid::class, 'store']);
Route::get('/borangmurid', [daftarMurid::class, 'create'])->name('borangmurid');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ubahmurid/{idmurid}', [ubahMurid::class, 'index'])->name('tukarmurid');
Route::put('/ubahmurid/{idmurid}', [ubahMurid::class, 'update']);

Route::get('/padammurid/{idmurid}', [padammurid::class, 'delete'])->name('padammurid');