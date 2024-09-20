@extends('layouts.app')

@section('content')
    <h1>Danh sách cư dân</h1>
    <a href="{{ route('residents.create') }}">Thêm mới cư dân</a>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Căn hộ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($residents as $resident)
            <tr>
                <td>{{ $resident->id }}</td>
                <td>{{ $resident->name }}</td>
                <td>{{ $resident->apartment }}</td>
                <td>{{ $resident->phone }}</td>
                <td>{{ $resident->email }}</td>
                <td>
                    <a href="{{ route('residents.edit', $resident->id) }}">Chỉnh sửa</a>
                    <form action="{{ route('residents.destroy', $resident->id) }}" method="POST" style="display:inline-block">
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
