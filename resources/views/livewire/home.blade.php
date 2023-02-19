<section>

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl">Próximos eventos</h1>
        <x-input wire:model="search" right-icon="search" placeholder="Busque por um evento" />
    </div>

    <div class="mt-4">
        <div class="grid grid-cols-event gap-4">
            <x-event.card />
            <x-event.card />
            <x-event.card />
            <x-event.card />
        </div>
    </div>
</section>
