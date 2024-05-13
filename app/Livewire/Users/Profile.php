<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Profile extends Component
{
    #[Title('Profile')]
    #[Layout('components.layout.app')]
    public function render()
    {
        return view('livewire.users.profile');
    }
}
