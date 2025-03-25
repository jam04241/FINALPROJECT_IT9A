<?php

use App\Http\Controllers\ProfileController;
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
