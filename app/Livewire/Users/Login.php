<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    use LivewireAlert;

    public LoginForm $form;
    public function logon()
    {
        $this->form->validate();
        $credentials = Auth::attempt([
            'email' => $this->form->email,
            'password' => $this->form->password
        ]);
        dd($this->form->email);
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
