<div>
    <x-card title="Informações de perfil">
        <form class="grid grid-cols-2 gap-4">
            <x-form.input
                wire:model="user.avatar"
                type="file"
                id="user.avatar"
                label="Foto"
                :required="false"
            />
            <x-form.input
                wire:model="user.email"
                type="text"
                id="user.email"
                label="Email"
                placeholder="Seu email"
            />
            <x-form.input
                wire:model="user.name"
                type="text"
                id="user.name"
                label="Nome completo"
                placeholder="Seu nome completo"
            />
            <x-form.input
                wire:model="user.cpf"
                type="text"
                id="user.cpf"
                label="CPF"
                placeholder="Seu cpf"
                :required="false"
            />
            <x-form.input
                wire:model="user.phone"
                type="text"
                id="user.phone"
                label="Telefone"
                placeholder="Seu telefone"
                :required="false"
            />
        </form>
    </x-card>

</div>
