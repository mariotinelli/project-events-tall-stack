<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Usernotnull\Toast\Concerns\WireToast;

class Information extends Component
{
    use WithFileUploads, WireToast;

    public User $user;
    public array $state = [
        'avatar' => '',
        'email' => '',
        'name' => '',
        'phone' => '',
        'cpf' => '',
    ];

    protected function rules(): array
    {
        return [
            'state.avatar' => ['nullable', 'image', 'max:10240'],
            'state.email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user->id, 'id')],
            'state.name' => ['required', 'max:255', 'string'],
            'state.phone' => ['nullable', 'string', 'min:15', 'max:15'],
            'state.cpf' => ['nullable', 'string', 'min:14', 'max:14'],
        ];
    }

    protected array $validationAttributes = [
        'state.avatar' => 'foto de perfil',
        'state.email' => 'email',
        'state.name' => 'nome completo',
        'state.phone' => 'telefone',
        'state.cpf' => 'cpf',
    ];

    public function submit()
    {
        $this->validate();

        if ($this->user->avatar && ($this->state['avatar'] != asset("storage/{$this->user->avatar}"))) {
            Storage::delete($this->user->avatar);
        }

        $path = Storage::put("users/{$this->user->id}/avatar", $this->state['avatar'], 'public');

        $this->state['avatar'] = $path;

        $this->user->update($this->state);

        toast()->success('Informações de perfil salvas com sucesso.', 'Perfil')
            ->push();
    }

    private function initVariables(User $user): void
    {
        $this->user = $user;
        $this->state['avatar'] = $user->avatar;
        $this->state['name'] = $user->name;
        $this->state['email'] = $user->email;
        $this->state['phone'] = $user->phone;
        $this->state['cpf'] = $user->cpf;
    }

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function mount(User $user): void
    {
        $this->initVariables($user);
    }

    public function render(): View
    {
        return view('livewire.profile.information');
    }
}
