<?php

namespace App\Livewire\Dashboard\Promotions;

use App\Models\Promotion;
use Livewire\Component;

class PromotionIndex extends Component
{
    public $promotions;

    public function mount(){
        $this->promotions = Promotion::with('supplier')->get();
    }

    public function render()
    {
        return view('livewire.dashboard.promotions.promotion-index');
    }
}
