<?php

namespace App\Livewire\Dashboard\Administrators;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class AdministratorIndex extends Component
{
    public $search = '';

    public function render()
    {

        $user = User::with('roles')->find(1);

        $users = User::with('roles')
                ->whereDoesntHave('roles', function ($query) {
                    $query->where('name', '=', 'super admin');
                })
                ->where(function ($query) {
                    $query->orWhere('name', 'like', '%' . $this->search . '%')
                        ->orWhere('username', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                })
                ->get();
    
        return view('livewire.dashboard.administrators.administrator-index', compact('users'));
    }
    
    public function destroy($userId)
    {
        $this->authorize('access.delete');

        $userToDelete = User::findOrFail($userId);
        $userToDelete->delete();
        return response()->json(['message' => 'User deleted successfully.']);

        // if (Gate::forUser(User::findOrFail($userId))->allows('delete')) {
        //     dd('test');
        // }
        // User::findOrFail($userId)->delete();
        // session()->flash('message', 'User deleted successfully.');
    }
}
