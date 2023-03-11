<section>

    <div class="flex flex-col mb-6 space-y-2 sm:items-center sm:justify-between sm:flex-row">
        <h1 class="text-3xl">Próximos eventos</h1>
        <x-input wire:model="search" right-icon="search" placeholder="Busque por um evento" />
    </div>

    <div class="mt-4">
        <div class="grid gap-4 grid-cols-event">
            <x-event.card />
            <x-event.card />
            <x-event.card />
            <x-event.card />
        </div>
    </div>
</section>
