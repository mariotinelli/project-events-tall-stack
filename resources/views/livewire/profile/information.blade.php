<div class="border rounded-lg">
    <x-card title="Informações de perfil">
        <form class="flex flex-col space-y-4 items-end">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 w-full">

                <x-form.input-image
                    wire:model="user.avatar"
                    type="file"
                    id="user.avatar"
                    label="Foto de perfil"
                    description="Insira uma imagem para seu perfil"
                    :resource="$user->avatar"
                    :required="false"
                />

                <div class="flex flex-col gap-2">
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
                </div>
                <div class="flex flex-col gap-2">
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
                        type="tel"
                        id="user.phone"
                        label="Telefone"
                        placeholder="Seu telefone"
                        :required="false"
                    />
                </div>
            </div>

            <x-button class="w-full sm:w-auto" primary label="Salvar"/>
        </form>
    </x-card>

</div>
