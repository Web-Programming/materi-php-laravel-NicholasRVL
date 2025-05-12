<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prodi1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prodi1.index', [
        'kampus'     => 'Universitas MDP',
        'dosen'      => 'Dosen',
        'fakultas'   => 'Fakultas',
        'prodi'      => 'Prodi',
        'mahasiswa'  => 'Mahasiswa',
        'materi'     => 'Materi',
        'fkk'        => 'Fakultas Ilmu Komputer Dan Rekayasa',
        'fkbe'       => 'Fakultas bisnis Dan Manajemen',
        'title'      => 'Prodi',
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
