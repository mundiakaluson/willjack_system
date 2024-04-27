<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Login extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Login')]
    public function render()
    {
        return view('livewire.users.login');
    }
}
