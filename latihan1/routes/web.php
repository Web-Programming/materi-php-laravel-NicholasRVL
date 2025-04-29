<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/berita/{id}/{title?}', function ($id, $title = NULL) {
    return view('berita', data:['id' => $id, 'title' => $title ]);
});

Route::get('/total/{angka1}/{angka2}/{angka3?}', function ($angka1, $angka2, $angka3 = NULL) {
    return view('total', data:['angka1' => $angka1, 'angka2' => $angka2, 'angka3' => $angka3 ]);
});