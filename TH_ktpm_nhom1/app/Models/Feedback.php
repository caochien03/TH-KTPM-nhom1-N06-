<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
     // Khai báo các trường có thể điền vào
     protected $fillable = [
        'resident_id', 'title', 'content', 'status'
    ];

    // Một phản ánh thuộc về một cư dân
    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }
}
