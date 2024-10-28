<?php

namespace App\Livewire\Auth\Passwords;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Password;
use App\Notifications\CustomResetPassword;

class Email extends Component
{
    public $email;

    public function sendResetLink()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $response = Password::sendResetLink(['email' => $this->email]);

        $user = User::where('email', $this->email)->first();
        if (!$user) {
            $this->addError('email', 'We could not find a user with that email address.');
            return;
        }

         // Generate the password reset token
         $token = Password::broker()->createToken($user);

         // Send the custom reset password notification
         $user->notify(new CustomResetPassword($token));


        if ($response === Password::RESET_LINK_SENT) {
            session()->flash('status', 'Password reset link sent!');
        } else {
            session()->flash('error', 'Failed to send password reset link.');
        }
    }

    public function render()
    {
        return view('livewire.auth.passwords.email');
    }
}