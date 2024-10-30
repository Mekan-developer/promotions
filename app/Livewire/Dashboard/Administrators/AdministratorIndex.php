<?php

namespace App\Livewire\Dashboard\Administrators;

use App\Models\User;
use Livewire\Component;

class AdministratorIndex extends Component
{
    public $search = '';

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
                     ->orWhere('username', 'like', '%' . $this->search . '%')
                     ->orWhere('email', 'like', '%' . $this->search . '%')
                     ->orWhere('role', 'like', '%' . $this->search . '%')
                     ->get();
    
        return view('livewire.dashboard.administrators.administrator-index', compact('users'));
    }
    
    public function destroy($userId)
    {
        User::findOrFail($userId)->delete();
        session()->flash('message', 'User deleted successfully.');
    }
}
