<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index() {
        return view('home', [
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
    }
}