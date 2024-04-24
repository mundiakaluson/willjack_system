<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class PropertyDetails extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Property #')]
    public function render()
    {
        return view('livewire.property-details');
    }
}
