<?php

namespace App\Livewire\Dashboard\Administrators;

use App\Mail\WelcomeMail;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Events\UserRegistered;
use Event;

class AdministratorCreate extends Component
{
    public $showPassword = false;
    public $name, $username, $email, $password;
    public $role_is = false,$roles;
    public $admin_role='true', $editor_role='false', $viewer_role='fales';


    public function togglePasswordVisibility()//change password type to 'text' <--> 'password'
    {
        $this->showPassword = !$this->showPassword;
    }

    public function toggleRole($role)
    {
        $this->role_is = $role;
             
    }


    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5',
            'roles' => 'required'
        ]);


        $user = User::register([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $user['pass'] = $this->password;
        $user->roles()->attach($this->role_id($this->role_is));

        // Mail::to($user->email)->send(new WelcomeMail($user));
        event(new UserRegistered($user));
 

        session()->flash('message', 'Administrator created successfully.');
        return redirect()->route('administrators.index');
    }


    public function render()
    {
        return view('livewire.dashboard.administrators.administrator-create');
    }

    public function role_id($role_name){
        if($role_name == 'admin'){
            return 2;
        }elseif($role_name == 'editor'){
            return 3;
        }elseif($role_name == 'viewer'){
            return 4;
        }
    }

}


    

