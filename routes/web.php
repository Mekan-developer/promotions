<?php

use App\Http\Controllers\LanguageController;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset as PasswordReset;
use App\Livewire\Client\Index;
use App\Livewire\Dashboard\Home;
use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

// Route::get('/', Index::class)->name('client.index');
Route::get('lang', [LanguageController::class, 'change'])->name("change.lang");

Route::middleware(['RedirectIfAuthenticated'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    // password reset start
    Route::get('/password/reset',Email::class)->name('password.request');
    Route::get('password/reset/{token}/{email}', PasswordReset::class)->name('password.reset');
    // password resent end
});

Route::middleware(['auth'])->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/dashboard', Home::class)->name('dashboard.home');

});


Route::get('/alpine',function () {
    return view('alpine');
});


// Fallback route for undefined routes
Route::fallback(function () {
    return redirect('/login');
});
