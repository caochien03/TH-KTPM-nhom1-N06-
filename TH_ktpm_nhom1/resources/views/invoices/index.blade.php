@extends('layouts.app')

@section('content')
    <h1>Danh sách hóa đơn</h1>
    <a href="{{ route('invoices.create') }}">Tạo hóa đơn mới</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Cư dân</th>
                <th>Số tiền</th>
                <th>Trạng thái</th>
                <th>Ngày đến hạn</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->resident->name }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->status == 'paid' ? 'Đã thanh toán' : 'Chưa thanh toán' }}</td>
                    <td>{{ $invoice->due_date }}</td>
                    <td>
                        <a href="{{ route('invoices.edit', $invoice->id) }}">Chỉnh sửa</a>
                        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
