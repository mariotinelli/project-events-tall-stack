<x-card>
    <x-slot name="header">
        <img
            class="h-48 rounded-t-md"
            src="https://picsum.photos/300?size=xl"
            alt="Event image"
        >
    </x-slot>

    <h1 class="font-bold line-clamp-1">Nome do evento</h1>
    <p class="my-3 text-sm text-gray-400">17/12/1994</p>
    <p class="line-clamp-3 text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Optio tenetur in quaerat unde nulla autem, accusamus recusandae laboriosam minima aperiam alias
        animi debitis magni ipsum adipisci dolor cumque. Eius, dicta.</p>

    <x-slot name="footer">
        <div class="flex items-center justify-between">
            <x-button
                label="Participar"
                green
                icon="check"
            />
            <x-button
                label="Ver mais"
                info
                icon="eye"
            />
            <x-button.circle
                negative
                flat
                icon="heart"
            />
        </div>
    </x-slot>
</x-card>
