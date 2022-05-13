<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// Call products route file
require __DIR__ . '/products.php';

// Call customers route file
require __DIR__ . '/customers.php';

// Call orders route file
require __DIR__ . '/orders.php';
