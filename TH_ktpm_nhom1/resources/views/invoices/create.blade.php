@extends('layouts.app')

@section('content')
    <h1>Tạo hóa đơn mới</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf

        <label for="resident_id">Cư dân:</label>
        <select name="resident_id" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}">{{ $resident->name }}</option>
            @endforeach
        </select><br>

        <label for="amount">Số tiền:</label>
        <input type="text" name="amount" required><br>

        <label for="status">Trạng thái:</label>
        <select name="status" required>
            <option value="unpaid">Chưa thanh toán</option>
            <option value="paid">Đã thanh toán</option>
        </select><br>

        <label for="due_date">Ngày đến hạn:</label>
        <input type="date" name="due_date" required><br>

        <button type="submit">Tạo hóa đơn</button>
    </form>
@endsection
