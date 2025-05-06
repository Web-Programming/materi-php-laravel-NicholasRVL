<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
       Mahasiswa::insert([
            'npm' => '2428250016',
            'name' => 'nich',
            'tempat_lahir' => 'Paris',
            'tanggal_lahir' => '2006-09-02',
            'alamat' => 'Palembang',
            'created_at' => date("Y-m-d H:i:S")

        ]);

        DB::table('mahasiswa')
          ->where("npm", "2428250016")
          ->update(["npm" => "200920066P"]);

        $all = Mahasiswa::all();
        $filtered = Mahasiswa::where('id', '<', 3)->get();
        $selected = Mahasiswa::select(['npm', 'name'])->get();
        dd($all, $filtered, $selected); 
    }
}
