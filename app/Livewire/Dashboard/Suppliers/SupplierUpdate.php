<?php

namespace App\Livewire\Dashboard\Suppliers;

use App\Models\Supplier;
use Livewire\Component;

class SupplierUpdate extends Component
{
    public $supplierId, $name, $email, $phone, $address, $brands;

    public function rules (){
        return [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:suppliers,email,'.$this->supplierId,
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'brands' => 'nullable|string'
        ];
        
    }

    public function mount(Supplier $supplier)
    {
        $this->supplierId = $supplier->id;
        $this->name = $supplier->name;
        $this->email = $supplier->email;
        $this->phone = $supplier->phone;
        $this->address = $supplier->address;
        $this->brands = $supplier->brands;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        $supplier = Supplier::findOrFail($this->supplierId);
        $supplier->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'brands' => $this->brands,
        ]);

        session()->flash('message', 'Supplier updated successfully.');

        return redirect()->route('suppliers.index');
    }

    public function render()
    {
        return view('livewire.dashboard.suppliers.supplier-update');
    }

}
