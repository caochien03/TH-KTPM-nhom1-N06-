<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Invoice::create([
            'resident_id' => 1, // ID của cư dân
            'amount' => 1500000,
            'status' => 'unpaid',
            'due_date' => now()->addDays(10), // Ngày hết hạn là 10 ngày sau
        ]);

        Invoice::create([
            'resident_id' => 2,
            'amount' => 1000000,
            'status' => 'paid',
            'due_date' => now()->subDays(5), // Ngày hết hạn là 5 ngày trước
        ]);
    }
}
