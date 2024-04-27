<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Logout extends Component
{
    use LivewireAlert;

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $this->flash(
            'success',
            'Logout Successful',
            [
                'position' => 'bottom-start',
            ],
        );
        return redirect()->intended('/');
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
