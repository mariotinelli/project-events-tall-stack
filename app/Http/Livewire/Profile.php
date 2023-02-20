<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.profile', [
            'loggedUser' => Auth::user(),
        ]);
    }
}
