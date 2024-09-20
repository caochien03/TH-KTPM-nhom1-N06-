@extends('layouts.app')

@section('content')
    <h1>Chỉnh sửa hóa đơn</h1>
    <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="resident_id" class="form-label">Cư dân:</label>
        <select name="resident_id" class="form-select" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}" {{ $resident->id == $invoice->resident_id ? 'selected' : '' }}>
                    {{ $resident->name }}
                </option>
            @endforeach
        </select><br>

        <label for="amount" class="form-label">Số tiền:</label>
        <input type="text" name="amount" value="{{ $invoice->amount }} " class="form-control" required><br>

        <label for="status" class="form-label">Trạng thái:</label>
        <select name="status" class="form-select" required>
            <option value="unpaid" {{ $invoice->status == 'unpaid' ? 'selected' : '' }}>Chưa thanh toán</option>
            <option value="paid" {{ $invoice->status == 'paid' ? 'selected' : '' }}>Đã thanh toán</option>
        </select><br>

        <label for="due_date" class="form-label">Ngày đến hạn:</label>
        <input type="date" name="due_date" value="{{ $invoice->due_date }} " class="form-control" required><br>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
