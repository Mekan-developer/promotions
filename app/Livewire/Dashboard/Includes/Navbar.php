<?php

namespace App\Livewire\Dashboard\Includes;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavBar extends Component
{
    public $isModalOpen = false;
    public $username;
    public $email;
    public $password='', $showPassword = false;



    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function logOut()
    {
        Auth::logout(); // Laravel's built-in logout function
        session()->invalidate(); // Invalidate the current session
        session()->regenerateToken(); // Regenerate the CSRF token for security

        return redirect('/');
    }

    public function render()
    {
        $this->username = auth()->user()->username;
        $this->email = auth()->user()->email;
        return view('livewire.dashboard.includes.nav-bar');
    }
}
