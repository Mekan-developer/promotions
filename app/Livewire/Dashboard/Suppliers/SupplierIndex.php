<?php

namespace App\Livewire\Dashboard\Suppliers;

use App\Models\Supplier;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class SupplierIndex extends Component
{
    use WithPagination;
    public $search = '';

    
    public function render()
    {
        $suppliers = Supplier::with('promotions')
        ->where('name', 'like', '%' . $this->search . '%')
        ->orWhere('email', 'like', '%' . $this->search . '%')
        ->orWhere('brands', 'like', '%' . $this->search . '%')
        ->paginate(10);
        
        
        return view('livewire.dashboard.suppliers.supplier-index',compact('suppliers'));
    }
        
    public function placeholder(){
        return view('livewire.placeholders.indexPage');
    }

    public function destroy(Supplier $supplier){
        $supplier->delete();
    }
}
