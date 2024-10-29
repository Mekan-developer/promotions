<?php

namespace App\Livewire\Dashboard\Supliers;

use App\Models\Supplier;
use Livewire\Component;

class SupplierIndex extends Component
{
    public $suppliers;

    public function mount(){
        $this->suppliers = Supplier::with('promotions')->get();
    }

    public function render()
    {
        return view('livewire.dashboard.supliers.supplier-index');
    }
}
