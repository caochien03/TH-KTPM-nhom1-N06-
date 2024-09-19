<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Feedback::create([
            'resident_id' => 1,
            'title' => 'Phản ánh về nước sinh hoạt',
            'content' => 'Nước sinh hoạt tại căn hộ không có nước nóng, yêu cầu xử lý.',
            'status' => 'pending',
        ]);

        Feedback::create([
            'resident_id' => 2,
            'title' => 'Phản ánh về an ninh',
            'content' => 'An ninh không chặt chẽ, đề nghị tăng cường bảo vệ.',
            'status' => 'resolved',
        ]);
    }
}
