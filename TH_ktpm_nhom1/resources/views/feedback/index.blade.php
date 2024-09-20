@extends('layouts.app')

@section('content')
    <h1>Danh sách phản ánh</h1>
    <a href="{{ route('feedback.create') }}">Tạo phản ánh mới</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Cư dân</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->resident->name }}</td>
                    <td>{{ $feedback->title }}</td>
                    <td>{{ $feedback->content }}</td>
                    <td>{{ $feedback->status == 'pending' ? 'Đang chờ xử lý' : 'Đã giải quyết' }}</td>
                    <td>
                        <a href="{{ route('feedback.edit', $feedback->id) }}">Chỉnh sửa</a>
                        <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" style="display:inline-block">
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
