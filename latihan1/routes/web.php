<?php

use App\Http\Middleware\CekLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MateriController;


use APP\Http\Controllers\MhsApiController;
use App\Http\Controllers\Prodi1Controller;
use App\Http\Controllers\Prodi2Controller;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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

 Route::resource('prodi', Prodi1Controller::class);

Route::apiResource('api/mhs', 
controller: MhsApiController::class);





Route::get('/master', function () {

    return view('layout.master', [
        'kampus'     => 'Universitas MDP',
        'dosen'      => 'Dosen',
        'fakultas'   => 'Fakultas',
        'prodi'      => 'Prodi',
        'mahasiswa'  => 'Mahasiswa',
        'materi'     => 'Materi',
        'fkk'        => 'Fakultas Ilmu Komputer Dan Rekayasa',
        'fkbe'       => 'Fakultas bisnis Dan Manajemen',
        'title'      => 'Master',
    ]);

});


Route::get('/dashboard', function () {
    return view('layout.content1', [
        'kampus'     => 'Universitas MDP',
        'dosen'      => 'Dosen',
        'fakultas'   => 'Fakultas',
        'prodi'      => 'Prodi',
        'mahasiswa'  => 'Mahasiswa',
        'materi'     => 'Materi',
        'fkk'        => 'Fakultas Ilmu Komputer Dan Rekayasa',
        'fkbe'       => 'Fakultas bisnis Dan Manajemen',
        'title'      => 'Master',
    ]);
});

Route::get('/mhs', function(){

    
});

Route::get('/dosen', function(){
 
});


Route::get('/fakultas', function(){
   
});

Route::get('/materi', function(){
    
});

Route::get('/prodi1', function(){
    
});

Route::get('/prodi2', function(){

});

Route::resource('prodi1', Prodi1Controller::class);
Route::resource('prodi2', Prodi2Controller::class);
Route::resource('materi', MateriController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('content1', DashboardController::class);


//Authentication
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => [CekLogin::class.':admin']], function(){
        Route::get("/admin", [AdminController::class, 'index']);
        Route::resource('prodi', ProdiController::class);
        Route::resource('fakultas', FakultasController::class);
        Route::resource('materi', MateriController::class);
        Route::resource('mahasiswa', MahasiswaController::class);
    });

    Route::group(['middleware' => [CekLogin::class.':user']], function(){
        Route::get("/user", [UserController::class, 'index']);
    });

    Route::group(['middleware' => [CekLogin::class.':dosen']], function(){
        Route::get("/dosen", [DosenController::class, 'index']);
    });

});

