<?php

namespace App\Livewire\Client;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{

    public function placeholder()
    {
        
        return view('livewire.placeholders.skeleton');
    }

    public function render()
    {
        return view('livewire.client.index');
    }
}
