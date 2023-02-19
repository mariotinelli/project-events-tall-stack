<nav class="relative shadow-sm shadow-black bg-neutral-400 mx-auto flex h-20 w-full items-center justify-between px-8">

    {{-- logo --}}
    <a
        href="#"
        class="align-items my-auto flex justify-center"
    >
        <x-logo class="h-8 w-8" />
    </a>

    {{-- dropdown --}}
    <div class="flex-initial">
        <div class="relative flex items-center justify-end">
            <div class="block">
                <div class="relative inline">
                    <x-nav-dropdown />
                </div>
            </div>
        </div>
    </div>
</nav>
