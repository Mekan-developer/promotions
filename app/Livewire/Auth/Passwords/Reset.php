<?php

namespace App\Livewire\Auth\Passwords;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password as Pass;

class Reset extends Component
{
    public $token;  // The reset token
    public $email;  // The user's email
    public $password; // The new password
    public $password_confirmation; // Confirm the new password

    // Mount method to initialize the component with the token and email
    public function mount($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }


    public function rules()
    {
        return [
            'email' => 'required|email',
            'token' => 'required',
            'password' => ['required', Pass::min(5)->letters()->mixedCase()->symbols(), 'confirmed'],
            'password_confirmation' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // Method to reset the password
    public function resetPassword()
    {
        // Validate the password input
        $this->validate();

        // Attempt to reset the password
        $response = Password::broker()->reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'token' => $this->token,
            ],
            function ($user) {
                $user->forceFill([
                    'password' => Hash::make($this->password),
                ])->save();
            }
        );

        // Handle the response
        if ($response === Password::PASSWORD_RESET) {
            // Flash a success message
            session()->flash('status', 'Your password has been reset! You can now log in.');
            return redirect()->route('login'); // Redirect to the login page
        }

        // If the reset fails, throw an exception
        throw ValidationException::withMessages(['email' => trans($response)]);
    }

    // Render the view for this component
    public function render()
    {
        return view('livewire.auth.passwords.reset');
    }
}
