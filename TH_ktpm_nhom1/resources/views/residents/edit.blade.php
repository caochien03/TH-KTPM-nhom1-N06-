@extends('layouts.app')

@section('content')
    <h1>Chỉnh sửa thông tin cư dân</h1>

    <form action="{{ route('residents.update', $resident->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên:</label>
            <input type="text" name="name" class="form-control" value="{{ $resident->name }}" required><br>
        </div>
        
        <div class="mb-3">
            <label for="apartment" class="form-label">Căn hộ:</label>
            <input type="text" name="apartment" class="form-control" value="{{ $resident->apartment }}" required><br>
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label">Điện thoại:</label>
            <input type="text" name="phone" class="form-control" value="{{ $resident->phone }}" required><br>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $resident->email }}" required><br>
        </div>
        

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>

    <!-- <form action="{{ route('residents.update', $resident->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Tên:</label>
        <input type="text" name="name" value="{{ $resident->name }}" required><br>

        <label for="apartment">Căn hộ:</label>
        <input type="text" name="apartment" value="{{ $resident->apartment }}" required><br>

        <label for="phone">Điện thoại:</label>
        <input type="text" name="phone" value="{{ $resident->phone }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $resident->email }}" required><br>

        <button type="submit">Cập nhật</button>
    </form> -->
@endsection
