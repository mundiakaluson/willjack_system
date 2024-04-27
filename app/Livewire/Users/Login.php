<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\LoginForm;

class Login extends Component
{

    public LoginForm $form;
    public function logon()
    {
        $this->form->authenticate();
    }

    #[Layout('components.layouts.app')]
    #[Title('Login')]
    public function render()
    {
        return view('livewire.users.login');
    }
}
