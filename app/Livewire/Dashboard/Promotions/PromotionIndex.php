<?php

namespace App\Livewire\Dashboard\Promotions;

use App\Models\Promotion;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class PromotionIndex extends Component
{

    use WithPagination;
    public $search = '';

    public function destroy(Promotion $supplier){
        $supplier->delete();
    }

    public function changeStatus($id){
        if (Gate::allows('edit')) {
            $promotion = Promotion::findOrFail($id);
            $promotion->status = !$promotion->status;
            $promotion->save();
        } else {
            session()->flash('alert-message','Вы не можете редактировать статус, вам необходимо разрешение');
            return redirect()->route('promotions.index');
        }
    }

    public function render()
    {
        $promotions = Promotion::with('supplier')
                    ->whereHas('supplier', function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%');
                    })
                    ->where('title', 'like', '%' . $this->search . '%')
                    ->paginate(10);
        return view('livewire.dashboard.promotions.promotion-index',compact('promotions'));
    }

    public function placeholder(){
        return view('livewire.placeholders.indexPage');
    }
}
