@extends('layouts.app')

@section('content')
    <h1>Thêm mới cư dân</h1>
    <form action="{{ route('residents.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên:</label>
            <input type="text" name="name" class="form-control" required><br>
        </div>
        
        <div class="mb-3">
            <label for="apartment" class="form-label">Căn hộ:</label>
            <input type="text" name="apartment" class="form-control" required><br>
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label">Điện thoại:</label>
            <input type="text" name="phone" class="form-control" required><br>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required><br>
        </div>
        

        <button type="submit" class="btn btn-primary">Thêm cư dân</button>
    </form>
@endsection
