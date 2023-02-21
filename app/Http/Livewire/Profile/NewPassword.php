<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class NewPassword extends Component
{
    public User $user;
    public string $current_password;
    public string $password;
    public string $password_confirmation;

    protected array $rules = [
        'currentPassword' => ['required'],
        'password' => ['required', 'confirm'],
        'password_confirmation' => ['required']
    ];

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.profile.new-password');
    }
}
