<div class="border rounded-md">
    <x-card title="Alterar sua senha">
        <form class="flex flex-col items-end space-y-4">
            <div class="grid w-full grid-cols-1 gap-4 lg:grid-cols-3">
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

            <x-slot name="footer">
                <div class="flex justify-end w-full">
                    <x-button class="w-full sm:w-auto" primary label="Salvar"/>
                </div>
            </x-slot>
        </form>
    </x-card>

</div>
