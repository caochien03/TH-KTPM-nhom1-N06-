@extends('layouts.app')

@section('content')
    <h1>Tạo hóa đơn mới</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf

        <label for="resident_id" class="form-label">Cư dân:</label>
        <select name="resident_id" class="form-select" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}">{{ $resident->name }}</option>
            @endforeach
        </select><br>

        <label for="amount" class="form-label">Số tiền:</label>
        <input type="text" name="amount" class="form-control" required><br>

        <label for="status" class="form-label">Trạng thái:</label>
        <select name="status" class="form-select" required>
            <option value="unpaid">Chưa thanh toán</option>
            <option value="paid">Đã thanh toán</option>
        </select><br>

        <label for="due_date" class="form-label">Ngày đến hạn:</label>
        <input type="date" name="due_date" required><br>

        <button type="submit" class="btn btn-primary">Tạo hóa đơn</button>
    </form>
@endsection
