<x-dropdown>
    <x-slot name="trigger">
        <x-avatar lg label="MT"/>
    </x-slot>

    <div class="flex flex-col">
        @auth
            <a
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                href="#"
            >Perfil</a>
            <a
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                href="#"
            >Meus eventos</a>
            <hr class="my-1">
            <a
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                href="#"
            >Sair</a>
        @endauth

        @guest
            <a
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                href="{{ route('login') }}"
            >Entrar</a>
            <a
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                href="{{ route('register') }}"
            >Cadastrar</a>
        @endguest
    </div>
</x-dropdown>
