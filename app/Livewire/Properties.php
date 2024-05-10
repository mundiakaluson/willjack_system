<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Properties extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Properties')]
    public function render()
    {
        return view('livewire.properties');
    }
}
