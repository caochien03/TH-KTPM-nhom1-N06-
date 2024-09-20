@extends('layouts.app')

@section('content')
    <h1>Thêm mới cư dân</h1>
    <form action="{{ route('residents.store') }}" method="POST">
        @csrf
        <label for="name">Tên:</label>
        <input type="text" name="name" required><br>

        <label for="apartment">Căn hộ:</label>
        <input type="text" name="apartment" required><br>

        <label for="phone">Điện thoại:</label>
        <input type="text" name="phone" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Thêm cư dân</button>
    </form>
@endsection
