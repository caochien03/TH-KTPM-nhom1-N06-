<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\FeedbackController;


Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('residents', ResidentController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('feedback', FeedbackController::class);


