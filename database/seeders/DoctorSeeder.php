<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        Doctor::create(['doctor_code' => 'DR001', 'name' => 'dr. Teguh', 'specialization' => 'Umum', 'phone' => '081234567890', 'is_active' => true]);
        Doctor::create(['doctor_code' => 'DR002', 'name' => 'dr. Siti', 'specialization' => 'Anak', 'phone' => '081234567891', 'is_active' => false]);
        Doctor::create(['doctor_code' => 'DR003', 'name' => 'dr. Cyndy', 'specialization' => 'Kandungan', 'phone' => '081234567892', 'is_active' => true]);
        Doctor::create(['doctor_code' => 'DR004', 'name' => 'dr. Akbar', 'specialization' => 'Mata', 'phone' => '081234567893', 'is_active' => true]);
        Doctor::create(['doctor_code' => 'DR005', 'name' => 'dr. Yusuf', 'specialization' => 'Gigi', 'phone' => '081234567894', 'is_active' => false]);
        Doctor::create(['doctor_code' => 'DR006', 'name' => 'dr. Budi', 'specialization' => 'Jantung', 'phone' => '081234567895', 'is_active' => true]);
        Doctor::create(['doctor_code' => 'DR007', 'name' => 'dr. Rina', 'specialization' => 'Kulit', 'phone' => '081234567896', 'is_active' => true]);
        Doctor::create(['doctor_code' => 'DR008', 'name' => 'dr. Joko', 'specialization' => 'THT', 'phone' => '081234567897', 'is_active' => false]);
    }
}