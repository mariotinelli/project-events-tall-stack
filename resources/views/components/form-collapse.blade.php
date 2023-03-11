<div
    class="border rounded-lg shadow"
    x-data="collapse"
>
    <form
        class="flex flex-col items-end"
        wire:submit.prevent="submit"
    >

        <div
            class="z-10 flex justify-between w-full p-3 -mb-1 border-b rounded-t-lg cursor-pointer bg-slate-50"
            :class="expanded ? '' : 'rounded-b-lg'"
            @click="expand"
        >
            <h3 class="font-medium whitespace-normal text-md text-secondary-700">Informações de perfil</h3>
            <x-wire-icon
                name="chevron-up"
                x-ref="arrowIcon"
                class="transition-all ease-linear duration-600"
            />
        </div>

        <div
            x-show="expanded"
            x-collapse.duration.600ms
            class="w-full"
        >
            <x-card>

                <div class="grid w-full grid-cols-1 gap-4 lg:grid-cols-3">
                    {{ $inputs }}
                </div>

                <x-slot name="footer">
                    <div class="flex justify-end w-full">
                        <x-button
                            type="submit"
                            positive
                            label="Salvar"
                        />
                    </div>
                </x-slot>
            </x-card>
        </div>
    </form>

</div>

<script>
    function collapse() {
        return {
            expanded: true,

            expand() {
                this.expanded = !this.expanded;
                this.$refs.arrowIcon.classList.toggle('rotate-180');
            },
        }
    }
</script>
