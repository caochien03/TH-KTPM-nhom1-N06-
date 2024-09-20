<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Resident;

class InvoiceController extends Controller
{
    // Hiển thị danh sách hóa đơn
    public function index()
    {
        $invoices = Invoice::with('resident')->get();
        return view('invoices.index', compact('invoices'));
    }

    // Hiển thị form tạo hóa đơn mới
    public function create()
    {
        $residents = Resident::all();
        return view('invoices.create', compact('residents'));
    }

    // Lưu thông tin hóa đơn mới
    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'amount' => 'required|numeric',
            'status' => 'required|in:paid,unpaid',
            'due_date' => 'required|date',
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoices.index')->with('success', 'Hóa đơn đã được tạo thành công');
    }

    // Hiển thị form chỉnh sửa hóa đơn
    public function edit(Invoice $invoice)
    {
        $residents = Resident::all();
        return view('invoices.edit', compact('invoice', 'residents'));
    }

    // Cập nhật thông tin hóa đơn
    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'amount' => 'required|numeric',
            'status' => 'required|in:paid,unpaid',
            'due_date' => 'required|date',
        ]);

        $invoice->update($request->all());
        return redirect()->route('invoices.index')->with('success', 'Hóa đơn đã được cập nhật');
    }

    // Xóa hóa đơn
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index')->with('success', 'Hóa đơn đã được xóa');
    }
}
