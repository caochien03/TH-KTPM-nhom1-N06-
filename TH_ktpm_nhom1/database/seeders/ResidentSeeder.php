<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resident;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Resident::create([
            'name' => 'Nguyễn Văn A',
            'apartment' => 'A101',
            'phone' => '0905123456',
            'email' => 'nguyenvana@example.com',
            'contract_status' => 'active',
        ]);


        Resident::create([
            'name' => 'Trần Thị B',
            'apartment' => 'B202',
            'phone' => '0905765432',
            'email' => 'tranthib@example.com',
            'contract_status' => 'inactive',
        ]);
    }
}
