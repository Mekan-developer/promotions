<?php

namespace App\Livewire\Dashboard\Promotions;

use Livewire\Component;
use App\Models\Promotion;
use App\Models\Supplier;

class PromotionUpdate extends Component
{
    public $promotionId, $suppliers;
    public $title, $description, $price, $discount, $start_date, $end_date, $supplier_id;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'discount' => 'nullable|numeric|min:0|max:100',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'supplier_id' => 'required|exists:suppliers,id',
    ];

    public function mount(Promotion $promotion)
    {
        $this->promotionId = $promotion->id;
        $this->title = $promotion->title;
        $this->description = $promotion->description;
        $this->price = $promotion->price;
        $this->discount = $promotion->discount;
        $this->start_date = $promotion->start_date;
        $this->end_date = $promotion->end_date;
        $this->supplier_id = $promotion->supplier_id;

        // Load suppliers for the dropdown
        $this->suppliers = Supplier::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        // Validate input
        $this->validate();

        // Update the promotion in the database
        $promotion = Promotion::findOrFail($this->promotionId);
        $promotion->update([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'supplier_id' => $this->supplier_id,
        ]);

        session()->flash('message', 'Promotion updated successfully.');

        // Redirect to the promotions index
        return redirect()->route('promotions.index');
    }

    public function cancel()
    {
        return redirect()->route('promotions.index');
    }

    public function render()
    {
        return view('livewire.dashboard.promotions.promotion-update');
    }
}
