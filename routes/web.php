<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda/beranda');
});

Route::get('/Mahasiswa', function () {
    return view('mahasiswa/mahasiswa');
});

Route::get('/beranda', function () {
    return view('beranda/beranda');
});

Route::get('/profil', function () {
    return view('profil/profil');
});
