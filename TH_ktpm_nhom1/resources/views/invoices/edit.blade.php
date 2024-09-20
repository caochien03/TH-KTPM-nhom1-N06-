@extends('layouts.app')

@section('content')
    <h1>Chỉnh sửa hóa đơn</h1>
    <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="resident_id">Cư dân:</label>
        <select name="resident_id" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}" {{ $resident->id == $invoice->resident_id ? 'selected' : '' }}>
                    {{ $resident->name }}
                </option>
            @endforeach
        </select><br>

        <label for="amount">Số tiền:</label>
        <input type="text" name="amount" value="{{ $invoice->amount }}" required><br>

        <label for="status">Trạng thái:</label>
        <select name="status" required>
            <option value="unpaid" {{ $invoice->status == 'unpaid' ? 'selected' : '' }}>Chưa thanh toán</option>
            <option value="paid" {{ $invoice->status == 'paid' ? 'selected' : '' }}>Đã thanh toán</option>
        </select><br>

        <label for="due_date">Ngày đến hạn:</label>
        <input type="date" name="due_date" value="{{ $invoice->due_date }}" required><br>

        <button type="submit">Cập nhật</button>
    </form>
@endsection
