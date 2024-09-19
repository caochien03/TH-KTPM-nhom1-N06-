<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    // Khai báo các trường có thể điền vào
    protected $fillable = [
        'resident_id', 'amount', 'status', 'due_date'
    ];

    // Một hóa đơn thuộc về một cư dân
    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }
}
