<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;


Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{Yolanda}', function ($param1) {
    return 'Nama Saya: '.$param1;
});

Route::get('/nim/{pram1?}', function ($param1 = '') {
    return 'NIM Saya: '.$param1;
});

Route::get('/mahasiswa/{Yolanda}', [MahasiswaController::class, 'show']);

Route::get('/about', function (){
    return view('halaman-about');
});

Route::get('/matakuliahshow', [MatakuliahController::class, 'show']);
Route::get('/matakuliahindex', [MatakuliahController::class, 'index']);
Route::get('/matakuliahcreate', [MatakuliahController::class, 'create']);
Route::get('/matakuliahstore', [MatakuliahController::class, 'store']);
Route::get('/matakuliahedit', [MatakuliahController::class, 'edit']);
Route::get('/matakuliahupdate', [MatakuliahController::class, 'update']);
Route::get('/matakuliahdestroy', [MatakuliahController::class, 'destroy']);

Route::get('/matakuliah/{param1?}', [MahasiswaController::class, 'show']);
