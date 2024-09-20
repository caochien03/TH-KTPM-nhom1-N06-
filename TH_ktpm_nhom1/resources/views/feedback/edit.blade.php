@extends('layouts.app')

@section('content')
    <h1>Chỉnh sửa phản ánh</h1>
    <form action="{{ route('feedback.update', $feedback->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="resident_id">Cư dân:</label>
        <select name="resident_id" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}" {{ $resident->id == $feedback->resident_id ? 'selected' : '' }}>
                    {{ $resident->name }}
                </option>
            @endforeach
        </select><br>

        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" value="{{ $feedback->title }}" required><br>

        <label for="content">Nội dung:</label>
        <textarea name="content" required>{{ $feedback->content }}</textarea><br>

        <label for="status">Trạng thái:</label>
        <select name="status" required>
            <option value="pending" {{ $feedback->status == 'pending' ? 'selected' : '' }}>Đang chờ xử lý</option>
            <option value="resolved" {{ $feedback->status == 'resolved' ? 'selected' : '' }}>Đã giải quyết</option>
        </select><br>

        <button type="submit">Cập nhật</button>
    </form>
@endsection
