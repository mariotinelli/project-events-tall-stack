<nav class="relative mx-auto flex h-20 w-full items-center justify-between bg-neutral-400 px-8 shadow-sm shadow-black">

    {{-- logo --}}
    <a
        href="{{ route('home') }}"
        class="align-items my-auto flex justify-center"
    >
        <x-logo class="h-8 w-8" />
    </a>

    {{-- dropdown --}}
    <x-nav-dropdown />
</nav>
