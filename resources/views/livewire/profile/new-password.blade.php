<x-form-collapse>
    <x-slot name="inputs">
        <x-inputs.password
            wire:model="current_password"
            label="Senha atual"
            placeholder="Sua senha atual"
        />
        <x-inputs.password
            wire:model="password"
            label="Nova senha"
            placeholder="Sua nova senha"
        />
        <x-inputs.password
            wire:model="password_confirmation"
            label="Confirmar senha"
            placeholder="Confirme a senha"
        />
    </x-slot>
</x-form-collapse>
