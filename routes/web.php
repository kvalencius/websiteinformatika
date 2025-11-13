<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('beranda.beranda');
});

Route::get('/beranda', function () {
    return view('beranda.beranda');
});

Route::get('/mahasiswa', function () {
    return view('layout.mahasiswa.mahasiswa');
});

Route::get('/pendidikan', function () {
    return view('layout.pendidikan.pendidikan');
});

Route::get('/profil', function () {
    return view('layout.profil.profil');
});

Route::get('/riset', function () {
    return view('layout.riset.riset');
});

//admin
route::get('/admin', function () {
    return view('admin.mahasiswa.index');
});

//pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']); 

Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']); 

Route::post('/pegawai/store', [PegawaiController::class, 'store']); 

Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);

Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

Route::post('/pegawai/cari/{id}', [PegawaiController::class, 'pencarian']);

// user
Route::get('/daftar', [AuthController::class, 'registrationForm']);

Route::post('/daftar', [PegawaiController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginForm']);

Route::post('/login', [PegawaiController::class, 'login     ']);

Route::post('/logout', [PegawaiController::class, 'logout     ']);