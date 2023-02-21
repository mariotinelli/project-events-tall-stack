<div class="border rounded-md">
    <x-card title="Tornar-se organizador">
        <form class="flex flex-col items-end space-y-4">
            <div class="grid w-full grid-cols-1 gap-4 lg:grid-cols-3">
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
                    <x-form.input
                        wire:model="company.name"
                        type="text"
                        id="company.name"
                        label="Nome da empresa"
                        placeholder="O nome da empresa"
                    />
                    <x-form.input
                        wire:model="address.postal_code"
                        type="text"
                        id="address.postal_code"
                        label="CEP"
                        placeholder="CEP da empresa"
                    />
                </div>

                <div class="flex flex-col gap-2">
                    <x-form.input
                        wire:model="company.cnpj"
                        type="text"
                        id="company.cnpj"
                        label="CNPJ"
                        placeholder="CNPJ da empresa"
                    />
                    <x-form.input
                        wire:model="address.street"
                        type="text"
                        id="address.street"
                        label="Endereço"
                        placeholder="Endereço da empresa"
                    />
                </div>

                <x-form.input
                    wire:model="address.number"
                    type="text"
                    id="address.number"
                    label="Número"
                    placeholder="Número do endereço"
                />
                <x-form.input
                    wire:model="address.district"
                    type="text"
                    id="address.district"
                    label="Bairro"
                    placeholder="Bairro do endereço"
                />
                <x-form.input
                    wire:model="address.complement"
                    type="text"
                    id="address.complement"
                    label="Complemento"
                    placeholder="Complemento do endereço"
                />
                <x-form.input
                    wire:model="address.city"
                    type="text"
                    id="address.city"
                    label="Cidade"
                    placeholder="Cidade do endereço"
                />
                <x-form.input
                    wire:model="address.state"
                    type="text"
                    id="address.state"
                    label="Estado"
                    placeholder="Estado do endereço"
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
