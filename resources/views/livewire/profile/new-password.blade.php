<div class="border rounded-md">
    <x-card title="Alterar sua senha">
        <form class="flex flex-col space-y-4 items-end">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 w-full">
                <x-form.input
                    wire:model="current_password"
                    type="password"
                    id="current_password"
                    label="Senha atual"
                    placeholder="Sua senha atual"
                />
                <x-form.input
                    wire:model="password"
                    type="password"
                    id="password"
                    label="Nova senha"
                    placeholder="Sua nova senha"
                />
                <x-form.input
                    wire:model="password_confirmation"
                    type="password"
                    id="password_confirmation"
                    label="Confirmar senha"
                    placeholder="Confirme a senha senha"
                />
            </div>

            <x-button class="w-full sm:w-auto" primary label="Salvar"/>
        </form>
    </x-card>

</div>
