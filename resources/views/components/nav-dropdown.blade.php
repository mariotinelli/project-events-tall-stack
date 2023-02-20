<x-dropdown>
    <x-slot name="trigger">
        <x-avatar lg />
    </x-slot>

    <div class="flex flex-col">
        @auth

            <a
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                href="{{ route('users.profile') }}"
            >Perfil</a>

            @if (Auth::user()->isOrganizer())
                <a
                    class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                    href="{{ route('users.my-events') }}"
                >Meus eventos</a>
            @endif

            <a
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
                href="{{ route('users.my-events') }}"
            >Participações</a>

            <hr class="my-1">

            <a
                href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="p-2 text-sm text-gray-600 hover:rounded-lg hover:bg-gray-200"
            >
                Sair
            </a>

            <form
                id="logout-form"
                action="{{ route('logout') }}"
                method="POST"
                style="display: none;"
            >
                @csrf
            </form>
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
