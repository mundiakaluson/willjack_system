<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class LoginForm extends Form
{
    use LivewireAlert;
    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public $credentials = [];

    public function authenticate()
    {
        $this->credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        $this->validate();
        $response = Auth::attempt($this->credentials);
        if ($response){
            #request()->session()->regenerate();
            dd("OK");
        } else
        {
            dd("Denied");
        }
    }
}
