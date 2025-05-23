<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

// DEFAULT ROUTE
Route::get('/', function () {
    return view('guestpage');
})->name('guestpage');

// LOGIN FORM
Route::get('/login', function () {
    return view('login');
})->name('login');

// REGISTER
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('register');

//GUEST AND USER ROUTE
Route::get('/userpage', function () {
    return view('userpage');
})->name('userpage');

Route::get('/cars', function () {
    return view('cars');
})->name('cars');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/payment_section', function () {
    return view('paymentsection');
})->name('payment_section');

//ADMIN ROUTING
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard'); 
})->name('admin.dashboard');

Route::get('/admin-upcoming_bookings', function () {
    return view('admin.upcoming_bookings');  
})->name('admin.upcoming_bookings');

Route::get('/admin-active_bookings', function () {
    return view('admin.active_bookings');  
})->name('admin.active_bookings');

Route::get('/admin-car_modification', function () {
    return view('admin.car_modification');  
})->name('admin.car_modification');

Route::get('/admin-track_vehicle', function () {
    return view('admin.track_vehicle');  
})->name('admin.track_vehicle');

Route::get('/admin-maintenance_schedule', function () {
    return view('admin.maintenance_schedule');  
})->name('admin.maintenance_schedule');

Route::get('/admin-payment_history', function () {
    return view('admin.payment_history');  
})->name('admin.payment_history');

Route::get('/admin-rental_agreement', function () {
    return view('admin.rental_agreement');  
})->name('admin.rental_agreement');

Route::get('/admin-customer_records', function () {
    return view('admin.customer_records');  
})->name('admin.customer_records');

Route::get('/admin-report_analytics', function () {
    return view('admin.report_analytics');  
})->name('admin.report_analytics');

Route::get('/admin-employee', function () {
    return view('admin.employee');  
})->name('admin.employee');

Route::get('/admin.bookings', function () {
    return view('bookings');  
})->name('admin.bookings');








// authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/get-provinces', function () {
    $response = Http::get('https://psgc.gitlab.io/api/provinces');
    return $response->json();
});

Route::get('/get-cities/{provinceId}', function ($provinceId) {
    $response = Http::get("https://psgc.gitlab.io/api/provinces/{$provinceId}/municipalities");
    return $response->json();
});

Route::get('/get-barangays/{cityId}', function ($cityId) {
    $response = Http::get("https://psgc.gitlab.io/api/municipalities/{$cityId}/barangays");
    return $response->json();
});
require __DIR__.'/auth.php';
