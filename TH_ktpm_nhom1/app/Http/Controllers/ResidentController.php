<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        // Hiển thị danh sách cư dân

    public function index()
    {
        //
        $residents = Resident::all();
        return view('residents.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     */
        // Hiển thị form thêm mới cư dân

    public function create()
    {
        //
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        // Lưu thông tin cư dân mới

    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'apartment' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:residents',
            'contract_status' => 'active'
        ]);

        Resident::create($request->all());
        return redirect()->route('residents.index')->with('success', 'Thêm cư dân thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
      // Hiển thị form chỉnh sửa thông tin cư dân
    public function edit(Resident $resident)
    {
        //
        return view('residents.edit', compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     */
        // Cập nhật thông tin cư dân

    public function update(Request $request, Resident $resident)
    {
        //
        $request->validate([
            'name' => 'required',
            'apartment' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:residents,email,' . $resident->id,
            'contract_status' => 'active'
        ]);

        $resident->update($request->all());
        return redirect()->route('residents.index')->with('success', 'Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
     // Xóa cư dân
    public function destroy(Resident $resident)
    {
        //
        $resident->delete();
        return redirect()->route('residents.index')->with('success', 'Xóa cư dân thành công');
    }
}
