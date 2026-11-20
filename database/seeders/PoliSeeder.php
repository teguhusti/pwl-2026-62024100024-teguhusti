<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    public function run(): void
    {
        Poli::create(['poli_code' => 'P01', 'name' => 'Poli Umum', 'description' => 'Pelayanan kesehatan umum']);
        Poli::create(['poli_code' => 'P02', 'name' => 'Poli Gigi', 'description' => 'Pelayanan kesehatan gigi dan mulut']);
        Poli::create(['poli_code' => 'P03', 'name' => 'Poli Anak', 'description' => 'Pelayanan kesehatan anak']);
        Poli::create(['poli_code' => 'P04', 'name' => 'Poli Kandungan', 'description' => 'Pelayanan kesehatan ibu dan kandungan']);
    }
}