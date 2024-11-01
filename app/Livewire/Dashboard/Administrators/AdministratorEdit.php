<?php

namespace App\Livewire\Dashboard\Administrators;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdministratorEdit extends Component
{

    public $user;
    public $name;
    public $username;
    public $email;
    public $password;
    public $roles;
    public $role_is;

    public function mount(User $user)
    {
        // Загрузите данные администратора по его ID
        // $this->user = User::findOrFail($userId);
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->roles = $user->roles->pluck('name')->first(); // Предполагаем, что есть только одна роль
        $this->role_is = $this->roles;
    }

    public function toggleRole($role)
    {
        $this->role_is = $role;
    }

    public function update()
    {
        // Валидация данных
        $this->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $this->user->id,
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'nullable|string|min:5',
            'role_is' => 'required',
        ]);

        // Обновление данных администратора
        $this->user->update([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password ? Hash::make($this->password) : $this->user->password, // Если пароль пустой, оставить старый
        ]);

        // Обновление роли администратора
        $this->user->roles()->sync([$this->getRoleIdByName($this->role_is)]);

        // Сообщение об успешном обновлении
        session()->flash('message', 'Administrator updated successfully.');
        return redirect()->route('administrators.index');
    }

    private function getRoleIdByName($roleName)
    {
        return \App\Models\Role::where('name', $roleName)->firstOrFail()->id;
    }

    public function render()
    {
        return view('livewire.dashboard.administrators.administrator-edit');
    }
}
