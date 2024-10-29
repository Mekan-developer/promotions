<?php

namespace App\Livewire\Dashboard\Promotions;

use App\Models\Promotion;
use App\Models\Supplier;
use Livewire\Component;

class PromotionCreate extends Component
{
    public $suppliers;

    public $title, $description, $price, $discount, $start_date, $end_date, $status, $supplier_id;


    
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'discount' => 'nullable|numeric|min:0|max:100',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'supplier_id' => 'required|exists:suppliers,id', // Assuming supplier_id relates to a suppliers table
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        // Validate input
        $this->validate();

        // Create new record in the database
        Promotion::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'supplier_id' => $this->supplier_id,
        ]);

        // Optional: Show a success message
        session()->flash('message', 'Data created successfully.');

        // Clear input fields
        $this->reset(['title', 'description', 'price', 'discount', 'start_date', 'end_date', 'status', 'supplier_id']);

        return redirect()->route('promotions.index');
    }

    public function mount(){
        $this->suppliers = Supplier::all();
    }

    public function cancel(){
        return redirect()->route('promotions.index');
    }
    public function render()
    {
        return view('livewire.dashboard.promotions.promotion-create');
    }
}
