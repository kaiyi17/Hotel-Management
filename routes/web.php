<?php

use App\Models\Booking;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//All bookings
Route::get('/', [BookingController::class, 'index']);

// show create form
Route::get('/bookings/create', [BookingController::class, 'create']);

//store booking data
Route::post('/bookings', [BookingController::class, 'store']);

//single booking
Route::get('/booking/{booking}', [BookingController::class, 'show']);

// show Edit form
Route::get('/booking/{booking}/edit', [BookingController::class, 'edit']);

// update listing
Route::put('/booking/{booking}', [BookingController::class, 'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
