<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginForm extends Form
{
    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public $credentials = [];
    public $response;

    public function authenticate()
    {
        $this->credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        $this->validate();
        $this->response = Auth::attempt($this->credentials);
        if ($this->response){
            request()->session()->regenerate();
            return redirect()->intended('/');
        } else
        {
            $this->reset();
        }
    }
}
