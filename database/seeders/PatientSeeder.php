<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        Patient::create(['medical_record_number' => 'RM001', 'name' => 'Budi Santoso', 'gender' => 'L', 'birth_date' => '1990-05-10', 'address' => 'Kudus', 'phone' => '081234567890']);
        Patient::create(['medical_record_number' => 'RM002', 'name' => 'Siti Aminah', 'gender' => 'P', 'birth_date' => '1995-08-15', 'address' => 'Jepara', 'phone' => '081234567891']);
        Patient::create(['medical_record_number' => 'RM003', 'name' => 'Andi Pratama', 'gender' => 'L', 'birth_date' => '2000-01-20', 'address' => 'Semarang', 'phone' => '081234567892']);
    }
}