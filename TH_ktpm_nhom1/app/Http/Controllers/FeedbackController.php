<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Resident;

class FeedbackController extends Controller
{
    // Hiển thị danh sách phản ánh
    public function index()
    {
        $feedbacks = Feedback::with('resident')->get();
        return view('feedback.index', compact('feedbacks'));
    }

    // Hiển thị form tạo phản ánh mới
    public function create()
    {
        $residents = Resident::all();
        return view('feedback.create', compact('residents'));
    }

    // Lưu thông tin phản ánh mới
    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|in:pending,resolved',
        ]);

        Feedback::create($request->all());
        return redirect()->route('feedback.index')->with('success', 'Phản ánh đã được tạo thành công');
    }

    // Hiển thị form chỉnh sửa phản ánh
    public function edit(Feedback $feedback)
    {
        $residents = Resident::all();
        return view('feedback.edit', compact('feedback', 'residents'));
    }

    // Cập nhật thông tin phản ánh
    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|in:pending,resolved',
        ]);

        $feedback->update($request->all());
        return redirect()->route('feedback.index')->with('success', 'Phản ánh đã được cập nhật');
    }

    // Xóa phản ánh
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success', 'Phản ánh đã được xóa');
    }
}
