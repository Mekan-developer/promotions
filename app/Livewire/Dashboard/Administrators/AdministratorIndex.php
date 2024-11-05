<?php

namespace App\Livewire\Dashboard\Administrators;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class AdministratorIndex extends Component
{
    use WithPagination;
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
                ->paginate(10);
    
        return view('livewire.dashboard.administrators.administrator-index', compact('users'));
    }
    
    public function destroy($userId)
    {

        $userToDelete = User::findOrFail($userId);
        $userToDelete->delete();
        return response()->json(['message' => 'User deleted successfully.']);

        // if (Gate::forUser(User::findOrFail($userId))->allows('delete')) {
        //     dd('test');
        // }
        // User::findOrFail($userId)->delete();
        // session()->flash('message', 'User deleted successfully.');
    }

    public function placeholder(){
        return view('livewire.placeholders.indexPage');
    }
}
