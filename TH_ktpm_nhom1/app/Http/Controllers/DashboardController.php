<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Resident; // Model Cư dân
use App\Models\Invoice; // Model Thu chi
use App\Models\Feedback; // Model Phản ánh

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Lấy dữ liệu cho dashboard
        $totalResidents = Resident::count(); // Tổng số cư dân
        $totalInvoices = Invoice::where('status', 'unpaid')->count(); // Tổng số hóa đơn chưa thanh toán
        $totalFeedbacks = Feedback::where('status', 'pending')->count(); // Tổng số phản ánh chưa xử lý

        return view('dashboard.index', compact('totalResidents', 'totalInvoices', 'totalFeedbacks'));
    }
}
