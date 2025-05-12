<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('layout.content1', [
        'kampus'     => 'Universitas MDP',
        'dosen'      => 'Dosen',
        'fakultas'   => 'Fakultas',
        'prodi'      => 'Prodi',
        'mahasiswa'  => 'Mahasiswa',
        'materi'     => 'Materi',
        'fkk'        => 'Fakultas Ilmu Komputer Dan Rekayasa',
        'fkbe'       => 'Fakultas bisnis Dan Manajemen',
        'title'      => 'Dashboard',
       ]);

        $data = [
            'newOrders' => 150,
            'bounceRate' => 53,
            'userRegistrations' => 44,
            'uniqueVisitors' => 65,
            'sales' => 18230.00,
            'salesGrowth' => 12.5,
            'activities' => [
                ['id' => 1, 'user' => 'Admin', 'date' => '11-07-2023', 'activity' => 'Created new order'],
                ['id' => 2, 'user' => 'User', 'date' => '10-07-2023', 'activity' => 'Updated profile'],
            ],
        ];

        return view('dashboard', compact('data'));
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
