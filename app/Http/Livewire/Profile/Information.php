<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Information extends Component
{

    use WithFileUploads;

    public User $user;

    protected function rules(): array
    {
        return [
            'user.avatar' => ['nullable', 'image', 'max:10240'],
            'user.email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user->id, 'id')],
            'user.name' => ['required', 'max:255', 'string'],
            'user.phone' => ['nullable', 'string', 'min:15', 'max:15'],
            'user.cpf' => ['nullable', 'string', 'min:14', 'max:14'],
        ];
    }

    protected $validationAttributes = [
        'user.avatar' => 'foto',
        'user.email' => 'email',
        'user.name' => 'nome completo',
        'user.phone' => 'telefone',
        'user.cpf' => 'cpf',
    ];

    public function submit()
    {
        $this->validate();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.profile.information');
    }
}
