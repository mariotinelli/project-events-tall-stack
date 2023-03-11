<x-form-collapse>
    <x-slot name="inputs">
        <div class="row-span-2">
            <x-form.input-image
                wire:model="state.avatar"
                type="file"
                id="state.avatar"
                label="Foto de perfil"
                description="Insira uma imagem para seu perfil"
                :resource="$state['avatar']"
                :required="false"
            />
        </div>

        <div class="col-span-2 grid gap-2 md:grid-cols-2">
            <x-input
                wire:model="state.email"
                label="Email"
                placeholder="Seu email"
                maxlength="50"
            />
            <x-input
                wire:model="state.name"
                label="Nome completo"
                placeholder="Seu nome completo"
                maxlength="75"
            />
        </div>

        <div class="col-span-2 grid gap-2 md:grid-cols-2">
            <x-inputs.maskable
                mask="###.###.###-##"
                wire:model.defer="state.cpf"
                label="CPF"
                placeholder="Seu cpf"
                :required="false"
            />
            <x-inputs.maskable
                mask="(##) #####-####"
                wire:model="state.phone"
                label="Telefone"
                placeholder="Seu telefone"
                :required="false"
            />
        </div>
    </x-slot>
</x-form-collapse>
