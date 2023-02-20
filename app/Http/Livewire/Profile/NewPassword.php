<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class NewPassword extends Component
{

    public string $current_password;
    public string $password;
    public string $password_confirmation;


    public function render()
    {
        return view('livewire.profile.new-password');
    }
}
