<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Lazy;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password as Pass;

#[Lazy()]
class Login extends Component
{
    public $username='';
    public $password='', $showPassword = false;
    public $remember=false;


    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }
    public function placeholder(){
        return view('livewire.placeholders.login');
    }

    public function rules()
    {
        $loginType = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        return [
            $loginType => ['required','exists:users,'.$loginType],
            'password' => 'required',
        ];
    }
    public function validationAttributes(){
        $loginType = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        return [
            $loginType => __('auth.'.$loginType),
            'password' => __('auth.auth_password')
        ];
    }

    public function updated($propertyName)
    {
        
        $loginType = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(in_array($loginType, ['username','email']) and $propertyName == 'username'){
            $this->validateOnly($loginType);
        }else{
            $this->validateOnly($propertyName);
        } 
    }

    public function submitLogin()
    {
        $this->validate();
        
        $loginType = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        // Create credentials array based on the login type
        $credentials = [
            $loginType => $this->username,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials,$this->remember)) {
            session()->regenerate();  // Prevent session fixation
            return redirect()->intended('dashboard');
        } else {
            // $this->addError('error', 'These credentials do not match our records.');  // Show error to user
            session()->flash('error', 'These credentials do not match our records.');  // Show error to user
        }
        $this->reset('password');    
          
    }

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function clearError()
    {
        session()->forget('error');
    }
}
