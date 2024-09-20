@extends('layouts.app')

@section('content')
    <h1>Tạo phản ánh mới</h1>
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf

        <label for="resident_id" class="form-label">Cư dân:</label>
        <select name="resident_id" class="form-select" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}">{{ $resident->name }}</option>
            @endforeach
        </select><br>

        <label for="title" class="form-label">Tiêu đề:</label>
        <input type="text" name="title" class="form-control" required><br>

        <label for="content" class="form-label">Nội dung:</label>
        <textarea name="content" required class="form-control"></textarea><br>

        <label for="status" class="form-label">Trạng thái:</label>
        <select name="status" class="form-select" required>
            <option value="pending">Đang chờ xử lý</option>
            <option value="resolved">Đã giải quyết</option>
        </select><br>

        <button type="submit" class="btn btn-primary">Tạo phản ánh</button>
    </form>
@endsection
