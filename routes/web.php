<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

// Homepage (optional: Blade view at resources/views/welcome.blade.php or home.blade.php)
Route::get('/', [HomeController::class, 'index'])->name('home');

// About page (optional)
Route::get('/about', function () {
    return view('about'); // Blade: resources/views/about.blade.php
})->name('about');

// Contact page (optional)
Route::get('/contact', function () {
    return view('contact'); // Blade: resources/views/contact.blade.php
})->name('contact');

// Form Submit Route (POST method)
Route::post('/submit', [FormController::class, 'handleSubmit'])->name('form.submit');
