<?php

namespace App\Livewire\Dashboard\Supliers;

use App\Models\Supplier;
use Livewire\Component;

class SupplierCreate extends Component
{

    public $name, $email, $phone, $address,$brands;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:suppliers,email',
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'brands' => 'nullable|string',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        $supplier = Supplier::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'brands' => $this->brands,
        ]);

        session()->flash('message', 'Supplier created successfully.');

        // Reset form fields
        $this->reset(['name', 'email', 'phone', 'address','brands']);

        return redirect()->route('suppliers.index');
    }

    public function render()
    {
        return view('livewire.dashboard.supliers.supplier-create');
    }
}
