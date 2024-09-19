<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    // Khai báo các trường có thể điền vào
    protected $fillable = [
        'name', 'apartment', 'phone', 'email', 'contract_status'
    ];

    // Một cư dân có nhiều hóa đơn
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    // Một cư dân có nhiều phản ánh
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
