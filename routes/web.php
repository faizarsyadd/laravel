<?php

use Illuminate\Support\Facades\Route;

Route::view('/beranda', 'pages.beranda');

Route::get('/about/{slug?}', function ($slug = null) {
    return view('pages.about', compact('slug'));
})->where('slug', '[A-Za-z0-9\-]+');

Route::get('/profile/{slug?}', function ($slug = null) {
    return view('other.profile', compact('slug'));
})->where('slug', '[A-Za-z0-9\-]+');

Route::get('/pengaturan/{slug?}', function ($slug = null) {
    return view('other.pengaturan', compact('slug'));
})->where('slug', '[A-Za-z0-9\-]+');

Route::get('/feedback/{slug?}', function ($slug = null) {
    return view('other.feedback', compact('slug'));
})->where('slug', '[A-Za-z0-9\-]+');

Route::get('/contact/{slug?}', function ($slug = null) {
    return view('pages.contact', compact('slug'));
})->where('slug', '[A-Za-z0-9\-]+');

Route::fallback(function () {
    return response()
        ->view('errors.404', [], 404);
});

Route::get('/booking/{slug?}', function ($slug = null) {
    return view('pages.booking', compact('slug'));
})->where('slug', '[A-Za-z0-9\-]+');
