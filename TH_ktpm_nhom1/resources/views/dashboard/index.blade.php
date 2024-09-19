@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>

    <div class="row">
        <!-- Tổng số cư dân -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số cư dân</h5>
                    <p class="card-text">{{ $totalResidents }}</p>
                </div>
            </div>
        </div>

        <!-- Tổng số hóa đơn chưa thanh toán -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Hóa đơn chưa thanh toán</h5>
                    <p class="card-text">{{ $totalInvoices }}</p>
                </div>
            </div>
        </div>

        <!-- Tổng số phản ánh chưa xử lý -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Phản ánh chưa xử lý</h5>
                    <p class="card-text">{{ $totalFeedbacks }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <!-- Thêm biểu đồ thu chi (dùng thư viện Chart.js hoặc tương tự) -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Biểu đồ thu chi</h5>
                    <canvas id="incomeExpenseChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('incomeExpenseChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar', // Biểu đồ dạng cột
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'], // Tháng giả định
            datasets: [{
                label: 'Thu nhập',
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                data: [1200, 1900, 3000, 5000, 2000, 3000] // Số liệu giả định
            }, {
                label: 'Chi tiêu',
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
                data: [1000, 1500, 2500, 4000, 1700, 2800] // Số liệu giả định
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
