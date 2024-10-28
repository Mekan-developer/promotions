<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password as Pass;

#[Lazy()]
class Register extends Component
{

    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    public $showPassword1 = false;
    public $showPassword2 = false;
    public $showPopover = false; // New property to control visibility

    public function togglePasswordVisibility()//change password type to 'text' <--> 'password'
    {
        $this->showPassword1 = !$this->showPassword1;
    }
    public function togglePasswordConfirmationVisibility()//change password type to 'text' <--> 'password'
    {
        $this->showPassword2 = !$this->showPassword2;
    }
    public function placeholder(){ //Lazy loading scleton
        return view('livewire.placeholders.register');
    }

    public function rules()
    {
        return [
            'username' => 'required|string|min:4|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Pass::min(6)->letters()->mixedCase()->symbols(), 'confirmed'],
            'password_confirmation' => 'required',
        ];
    }

    // Method to validate only the updated field in real-time
    public function updated($propertyName)
    {
        if (!in_array($propertyName, ['password', 'password_confirmation'])) {
            $this->validateOnly($propertyName);
        } 
        if ($propertyName === 'password'){ //password type-da requirementleri gorkezmek we gizlemek u/n
            $this->showPopover = true;
        }else{
            $this->showPopover = false;
        }
    }

    public function hidePopover(){
        $this->showPopover = false;
    }

    public function register()
    {
        $this->validate();
        User::register([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

          
        auth()->attempt(['email' => $this->email,'username' => $this->username, 'password' => $this->password]);

        return redirect()->intended('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }

    // password requirments showed like tooltip when start input type='password' start 
    public $strength = 0;
    public $rules = [
        'upper_case' => false,
        'lower_case' => false,
        'symbol' => false,
        'length' => false,
    ];

    public function updatedPassword()
    {
        // Reset the rules and strength score
        $this->resetStrength();

        // Check for upper case letters
        if (preg_match('/[A-Z]/', $this->password)) {
            $this->rules['upper_case'] = true;
            $this->strength += 1;
        }

        // Check for lower case letters
        if (preg_match('/[a-z]/', $this->password)) {
            $this->rules['lower_case'] = true;
            $this->strength += 1;
        }

        // Check for symbols
        if (preg_match('/[!@#$%^&*(),.?":{}|<>]/', $this->password)) {
            $this->rules['symbol'] = true;
            $this->strength += 1;
        }

        // Check for length
        if (strlen($this->password) >= 6) {
            $this->rules['length'] = true;
            $this->strength += 1;
        }
    }

    private function resetStrength()
    {
        $this->rules = [
            'upper_case' => false,
            'lower_case' => false,
            'symbol' => false,
            'length' => false,
        ];
        $this->strength = 0;
    } 

}
