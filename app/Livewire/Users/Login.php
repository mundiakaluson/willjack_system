<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Login extends Component
{
    use LivewireAlert;

    public $email = '';
    public $password = '';

    public function logon()
    {
        $this->flash('question', 'Alert',
            [
                'position' => 'bottom-start',
            ]);
    }

    #[Layout('components.layouts.app')]
    #[Title('Login')]
    public function render()
    {
        return view('livewire.users.login');
    }
}
