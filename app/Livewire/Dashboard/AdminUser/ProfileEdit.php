<?php

namespace App\Livewire\Dashboard\AdminUser;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProfileEdit extends Component
{
    public $showPassword = false;
    public $name, $username, $email,$password,$user_id;

    public function rules(){
        return [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username'. $this->user_id,
            'email' => 'required|email|unique:users,email' . $this->user_id,
            'password' => 'nullable|string|min:5',
        ];
    } 
    
    public function mount()
    {
        $this->user_id = auth()->user()->id;
        $this->name = auth()->user()->name;
        $this->username = auth()->user()->username;
        $this->email = auth()->user()->email;
    }


    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }
    public function render()
    {
        return view('livewire.dashboard.admin-user.profile-edit');
    }

    public function update(){

        $data = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
        ];
        if($this->password){
            $data['password']= Hash::make($this->password);
        }
        
        auth()->user()->update($data);

        session()->flash('message', 'Your profile updated successfully.');
        return redirect()->route('profile.edit');
    }
}
