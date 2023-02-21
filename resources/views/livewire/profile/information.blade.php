<div
    class="rounded-lg border"
    x-data
>
    <form
        class="flex flex-col items-end space-y-4"
        wire:submit.prevent="submit"
    >
        <x-card title="Informações de perfil">
            <div class="grid w-full grid-cols-1 gap-4 lg:grid-cols-3">

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

                <div class="grid md:grid-cols-2 gap-2 col-span-2">
                    <x-form.input
                        wire:model="state.email"
                        type="text"
                        id="state.email"
                        label="Email"
                        placeholder="Seu email"
                        maxlength="50"
                    />
                    <x-form.input
                        wire:model="state.name"
                        type="text"
                        id="state.name"
                        label="Nome completo"
                        placeholder="Seu nome completo"
                        maxlength="75"
                    />
                </div>

                <div class="grid md:grid-cols-2 gap-2 col-span-2">
                    <x-form.input
                        x-mask="999.999.999-99"
                        wire:model="state.cpf"
                        type="text"
                        id="state.cpf"
                        label="CPF"
                        placeholder="Seu cpf"
                        :required="false"
                    />
                    <x-form.input
                        x-mask="(99) 99999-9999"
                        wire:model="state.phone"
                        type="tel"
                        id="state.phone"
                        label="Telefone"
                        placeholder="Seu telefone"
                        :required="false"
                    />
                </div>
            </div>

            <x-slot name="footer">
                <div class="flex w-full justify-end">
                    <x-button
                        type="submit"
                        class="w-full sm:w-auto"
                        primary
                        label="Salvar"
                    />
                </div>
            </x-slot>
        </x-card>
    </form>

</div>
