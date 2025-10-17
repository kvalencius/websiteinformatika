<?php

use Illuminate\Support\Facades\Route;

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