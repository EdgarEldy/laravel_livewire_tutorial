<?php

// Categories
use Illuminate\Support\Facades\Route;

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
