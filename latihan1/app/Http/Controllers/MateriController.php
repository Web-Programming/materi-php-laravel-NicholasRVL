<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(){
         return view('materi.index', [
        'kampus'     => 'Universitas MDP',
        'dosen'      => 'Dosen',
        'fakultas'   => 'Fakultas',
        'prodi'      => 'Prodi',
        'mahasiswa'  => 'Mahasiswa',
        'materi'     => 'Materi',
        'fkk'        => 'Fakultas Ilmu Komputer Dan Rekayasa',
        'fkbe'       => 'Fakultas bisnis Dan Manajemen',
        'title'      => 'Materi',
    ]);
    }


     public function show(string $id)
    {
        $materiList = [
            1 => (object)[
                'title' => 'Pengenalan Laravel',
                'description' => 'Materi dasar tentang framework Laravel'
            ],
            2 => (object)[
                'title' => 'Routing Laravel',
                'description' => 'Membahas penggunaan route dan controller'
            ],
            3 => (object)[
                'title' => 'Template',
                'description' => 'Contoh Template'
            ],
        ];
        
        $materi = $materiList[$id];
        return view('materi.detail', compact('materi'));
    }
}



