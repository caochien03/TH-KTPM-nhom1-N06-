@extends('layouts.app')

@section('content')
    <h1>Tạo phản ánh mới</h1>
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf

        <label for="resident_id">Cư dân:</label>
        <select name="resident_id" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}">{{ $resident->name }}</option>
            @endforeach
        </select><br>

        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" required><br>

        <label for="content">Nội dung:</label>
        <textarea name="content" required></textarea><br>

        <label for="status">Trạng thái:</label>
        <select name="status" required>
            <option value="pending">Đang chờ xử lý</option>
            <option value="resolved">Đã giải quyết</option>
        </select><br>

        <button type="submit">Tạo phản ánh</button>
    </form>
@endsection
