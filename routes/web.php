<?php

use App\Http\Controllers\LanguageController;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset as PasswordReset;
use App\Livewire\Dashboard\Administrators\AdministratorCreate;
use App\Livewire\Dashboard\Administrators\AdministratorEdit;
use App\Livewire\Dashboard\Administrators\AdministratorIndex;
use App\Livewire\Dashboard\AdminUser\ProfileEdit;
use App\Livewire\Dashboard\AppUsers\UserIndex;
use App\Livewire\Dashboard\Home;
use App\Livewire\Dashboard\Promotions\PromotionCreate;
use App\Livewire\Dashboard\Promotions\PromotionIndex;
use App\Livewire\Dashboard\Promotions\PromotionUpdate;
use App\Livewire\Dashboard\Suppliers\SupplierCreate;
use App\Livewire\Dashboard\Suppliers\SupplierIndex;
use App\Livewire\Dashboard\Suppliers\SupplierUpdate;
use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

// Route::get('/', Index::class)->name('client.index');
Route::get('lang', [LanguageController::class, 'change'])->name("change.lang");

Route::middleware(['RedirectIfAuthenticated'])->group(function () {
    Route::get('/login', Login::class)->name('login');

    Route::get('/password/reset',Email::class)->name('password.request');
    Route::get('password/reset/{token}/{email}', PasswordReset::class)->name('password.reset');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/register', Register::class)->name('register');

    Route::get('/dashboard', Home::class)->name('dashboard.home');

    Route::get('/suppliers', SupplierIndex::class)->name('suppliers.index');
    Route::get('/suppliers/create', SupplierCreate::class)->middleware('can:can-create')->name('suppliers.create');
    Route::get('/suppliers/{supplier}/edit', SupplierUpdate::class)->middleware('can:edit')->name('suppliers.edit');

    Route::get('/promotions', PromotionIndex::class)->name('promotions.index');
    Route::get('/promotions/create', PromotionCreate::class)->middleware('can:can-create')->name('promotions.create');
    Route::get('/promotions/{promotion}/edit', PromotionUpdate::class)->middleware('can:edit')->name('promotions.edit');

    Route::get('/administrators', AdministratorIndex::class)->name('administrators.index');
    Route::get('/administrators/create', AdministratorCreate::class)->middleware('can:can-create')->name('administrators.create');
    Route::get('/administrators/{user}/edit', AdministratorEdit::class)->middleware('can:edit')->name('administrators.edit');

    Route::get('/app-users', UserIndex::class)->name('users.index');
    Route::get('/profile', ProfileEdit::class)->name('profile.edit');

});

Route::get('/run-build', function () {
    exec('npm run build', $output, $returnCode);

    if ($returnCode !== 0) {
        return 'Build failed: ' . implode("\n", $output);
    }

    return 'Build completed successfully: ' . implode("\n", $output);
});

Route::fallback(function () {
    return redirect('/login');
});