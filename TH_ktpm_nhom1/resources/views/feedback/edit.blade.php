@extends('layouts.app')

@section('content')
    <h1>Chỉnh sửa phản ánh</h1>
    <form action="{{ route('feedback.update', $feedback->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="resident_id" class="form-label">Cư dân:</label>
        <select name="resident_id" class="form-select" required>
            @foreach($residents as $resident)
                <option value="{{ $resident->id }}" {{ $resident->id == $feedback->resident_id ? 'selected' : '' }}>
                    {{ $resident->name }}
                </option>
            @endforeach
        </select><br>

        <label for="title" class="form-label">Tiêu đề:</label>
        <input type="text" name="title" value="{{ $feedback->title }}" class="form-control" required><br>

        <label for="content" class="form-label">Nội dung:</label>
        <textarea name="content" class="form-control" required>{{ $feedback->content }}</textarea><br>

        <label for="status" class="form-label">Trạng thái:</label>
        <select name="status" class="form-select" required>
            <option value="pending" {{ $feedback->status == 'pending' ? 'selected' : '' }}>Đang chờ xử lý</option>
            <option value="resolved" {{ $feedback->status == 'resolved' ? 'selected' : '' }}>Đã giải quyết</option>
        </select><br>

        <button type="submit">Cập nhật</button>
    </form>
@endsection
