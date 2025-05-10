<?php

use App\Http\Controllers\MateriController;
use APP\Http\Controllers\MhsApiController;
use App\Http\Controllers\ProdiController;

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

    return view('berita', data: ['id' => $id, 'title'  => $title]);
});

Route::get('/total/{angka1}/{angka2}/{angka3?}', function ($angka1, $angka2, $angka3 = NULL) {
    return view('total', data: ['angka1' => $angka1, 'angka2'  => $angka2, 'angka3' => $angka3]);
});

Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultaas Ilmu Kommputer Dan Rekayasa"]);
    // return view('fakultas.index', ["Fakultas" => ["Fakultaas Ilmu Kommputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    // return view('fakultas.index') -> with ("fakultas", ["Fakultaas Ilmu Kommputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"]) ;

    $kampus = "Universitas Multi Data Palembang";

    // $fakultas = [];
    $fakultas = ["Fakultaas Ilmu Kommputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('fakultas', 'kampus'));

});

Route::get('/materi/index', 
[MateriController::class, 'index']);

Route::get('/materi/detail/{id}',
 [MateriController::class, 'detail']);

 Route::resource('prodi', ProdiController::class);

Route::apiResource('api/mhs', 
controller: MhsApiController::class);

Route::get('/master', function(){

    $kampus = "Universitas MDP";
    $dosen = "Dosen";
    $fakultas = "Fakultas";
    $prodi = "Prodi";
    $mahasiswa = "Mahasiswa";
    $materi = "Materi";

    $fkk = "Fakultas Ilmu Komputer Dan Rekayasa";
    $fkbe = "Fakultas bisnis Dan Manajemen";



    return view('layout.master', compact('kampus', 'dosen', 'fakultas', 'prodi', 'mahasiswa', 'materi', 'fkk', 'fkbe'), [
        'title' => 'Master'
    ]);

});



Route::get('/mhs', function(){

    
    $kampus = "Universitas MDP";
    $dosen = "Dosen";
    $fakultas = "Fakultas";
    $prodi = "Prodi";
    $mahasiswa = "Mahasiswa";
    $materi = "Materi";
    $fkk = "Fakultas Ilmu Komputer Dan Rekayasa";
    $fkbe = "Fakultas bisnis Dan Manajemen";


    return view('mhs.index', compact('kampus', 'dosen', 'fakultas', 'prodi', 'mahasiswa', 'materi', 'fkk', 'fkbe' ), [
        'title' => 'MHS'
    ]);

});

Route::get('/dosen', function(){

    $kampus = "Universitas MDP";
    $dosen = "Dosen";
    $fakultas = "Fakultas";
    $prodi = "Prodi";
    $mahasiswa = "Mahasiswa";
    $materi = "Materi";

    $fkk = "Fakultas Ilmu Komputer Dan Rekayasa";
    $fkbe = "Fakultas bisnis Dan Manajemen";



    return view('dosen.index', compact('kampus', 'dosen', 'fakultas', 'prodi', 'mahasiswa', 'materi', 'fkk', 'fkbe'), [
        'title' => 'Dosen'
    ]);

});


Route::get('/fakultas', function(){

    $kampus = "Universitas MDP";
    $dosen = "Dosen";
    $fakultas = "Fakultas";
    $prodi = "Prodi";
    $mahasiswa = "Mahasiswa";
    $materi = "Materi";

    $fkk = "Fakultas Ilmu Komputer Dan Rekayasa";
    $fkbe = "Fakultas bisnis Dan Manajemen";



    return view('fakultas.index', compact('kampus', 'dosen', 'fakultas', 'prodi', 'mahasiswa', 'materi', 'fkk', 'fkbe'), [
        'title' => 'Fakultas'
    ]);

});

Route::get('/materi', function(){

    $kampus = "Universitas MDP";
    $dosen = "Dosen";
    $fakultas = "Fakultas";
    $prodi = "Prodi";
    $mahasiswa = "Mahasiswa";
    $materi = "Materi";

    $fkk = "Fakultas Ilmu Komputer Dan Rekayasa";
    $fkbe = "Fakultas bisnis Dan Manajemen";



    return view('materi.index', compact('kampus', 'dosen', 'fakultas', 'prodi', 'mahasiswa', 'materi', 'fkk', 'fkbe'), [
        'title' => 'Materi'
    ]);

});

Route::get('/prodi', function(){

    $kampus = "Universitas MDP";
    $dosen = "Dosen";
    $fakultas = "Fakultas";
    $prodi = "Prodi";
    $mahasiswa = "Mahasiswa";
    $materi = "Materi";

    $fkk = "Fakultas Ilmu Komputer Dan Rekayasa";
    $fkbe = "Fakultas bisnis Dan Manajemen";



    return view('prodi.index', compact('kampus', 'dosen', 'fakultas', 'prodi', 'mahasiswa', 'materi', 'fkk', 'fkbe'), [
        'title' => 'Prodi'
    ]);

});
