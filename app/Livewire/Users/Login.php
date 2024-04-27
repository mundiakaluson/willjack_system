<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\LoginForm;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Login extends Component
{

    use LivewireAlert;
    public LoginForm $form;
    public function logon()
    {
        $this->form->authenticate();
        $user = auth()->user()->first_name;
        if ($this->form->response)
        {
            $this->flash(
                'success',
                "Login Successful as {$user}",
                [
                    'position' => 'bottom-start',
                ]
            );
        } else
        {
            $this->alert(
                'error',
                'Invalid password or email',
                [
                    'position' => 'bottom-start',
                ],
            );
        }
    }

    #[Layout('components.layouts.app')]
    #[Title('Login')]
    public function render()
    {
        return view('livewire.users.login');
    }
}
