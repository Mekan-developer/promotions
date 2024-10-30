<?php

namespace App\Livewire\Dashboard\Administrators;

use App\Models\RoleUser;
use App\Models\User;
use Livewire\Component;

class AdministratorCreate extends Component
{
    public $showPassword = false;
    public $name, $username, $email, $password;
    public $roles = [];


    public function togglePasswordVisibility()//change password type to 'text' <--> 'password'
    {
        $this->showPassword = !$this->showPassword;
    }
    public function toggleRole($role)
    {
        if (in_array($role, $this->roles)) {
            $this->roles = array_diff($this->roles, [$role]);
        } else {
            $this->roles[] = $role;
        }
        
    }


    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'roles' => 'required|array|min:1'
        ]);

   
        // Logic to create user with roles
        $user = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);


        foreach($this->rules as $key => $value){
            RoleUser::create([
                'user_id' => $user->id,
                'role_id' => $value
            ]);
        }

        session()->flash('message', 'Administrator created successfully.');
        return redirect()->route('administrators.index');
    }


    public function render()
    {
        return view('livewire.dashboard.administrators.administrator-create');
    }
}
