<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
