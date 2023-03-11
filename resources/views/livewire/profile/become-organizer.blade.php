<x-form-collapse>
    <x-slot name="inputs">
        <x-form.input-image
            wire:model="company.photo"
            type="text"
            id="company.photo"
            label="Foto da empresa"
            description="Insira uma imagem para sua empresa"
            {{-- :resource="$company->avatar" --}}
            :required="false"
        />

        <div class="flex flex-col gap-2">
            <x-input
                wire:model="company.name"
                label="Nome da empresa"
                placeholder="O nome da empresa"
            />
            <x-inputs.maskable
                wire:model="address.postal_code"
                mask="#####-###"
                label="CEP"
                placeholder="CEP da empresa"
            />
        </div>

        <div class="flex flex-col gap-2">
            <x-inputs.maskable
                wire:model="company.cnpj"
                mask="##.###.###/####-##"
                label="CNPJ"
                placeholder="CNPJ da empresa"
            />
            <x-input
                wire:model="address.street"
                label="Endereço"
                placeholder="Endereço da empresa"
            />
        </div>

        <x-input
            wire:model="address.number"
            label="Número"
            placeholder="Número do endereço"
        />
        <x-input
            wire:model="address.district"
            label="Bairro"
            placeholder="Bairro do endereço"
        />
        <x-input
            wire:model="address.complement"
            label="Complemento"
            placeholder="Complemento do endereço"
        />
        <x-input
            wire:model="address.city"
            label="Cidade"
            disabled
            placeholder="Cidade do endereço"
        />
        <x-input
            wire:model="address.state"
            label="Estado"
            disabled
            placeholder="Estado do endereço"
        />
    </x-slot>
</x-form-collapse>
