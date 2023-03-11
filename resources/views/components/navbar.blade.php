<nav class="relative sticky top-0 z-20 flex items-center justify-between w-full h-20 px-8 bg-white shadow">

    {{-- logo --}}
    <a
        href="{{ route('home') }}"
        class="flex justify-center my-auto align-items"
    >
        <x-logo class="w-8 h-8" />
    </a>

    {{-- dropdown --}}
    <x-nav-dropdown />
</nav>
