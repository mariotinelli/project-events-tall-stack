@props(['disabled' => false, 'required' => true, 'id', 'label' => null, 'resource' => null, 'description' => ''])

@php
    $classes = $errors->has($id)
        ? 'hidden placeholder-secondary-400 text-sm bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500'
        : 'hidden placeholder-secondary-400 text-sm border-gray-300 invalid:border-red-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:bg-slate-100 disabled:cursor-not-allowed rounded-md shadow-sm';
@endphp

<div class="flex flex-col space-y-1">

    <div class="flex flex-col sm:flex-row flex-1 sm:space-x-8 justify-between md:justify-start">
        <label
            class="flex flex-col justify-center space-y-2 text-sm text-gray-700 dark:text-gray-400 tracking-widest transition ease-in-out duration-150"
            for="{{ $id }}"
        >
            {{ $label }}

            @if ($required)
                <span class="text-red-500">*</span>
            @endif

            <input accept="image/*" {!! $attributes->merge(['class' => $classes, 'disabled' => $disabled ?? '', 'id' => $id ?? '']) !!}>

            <span class="text-xs text-gray-700">{{ $description }}</span>

            <span class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     ring-primary-500 text-white bg-primary-500 hover:bg-primary-600 hover:ring-primary-600
            dark:ring-offset-slate-800 dark:bg-primary-700 dark:ring-primary-700
            dark:hover:bg-primary-600 dark:hover:ring-primary-600 cursor-pointer">Selecione uma foto</span>
        </label>

        <div
            class="relative order-first mx-auto my-2 sm:m-2 flex h-28 w-28 items-center justify-center rounded-lg border border-dashed border-gray-400 bg-cover bg-center bg-no-repeat bg-origin-padding md:order-last">
            @if (is_null($resource))
                <span class="text-gray-400 opacity-75">
                    <svg
                        class="h-14 w-14"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="0.7"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                        />
                    </svg>
                </span>
            @else
                <img class="h-28 w-28" src="{{ $resource->temporaryUrl() }}" alt="image preview">
            @endif
        </div>
    </div>

    @error($id)
        <p class='text-sm text-red-600'>{{ $message }}</p>
    @enderror

</div>
