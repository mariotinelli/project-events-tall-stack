@props(['disabled' => false, 'required' => true, 'id', 'label' => null, 'resource' => null, 'description' => ''])

<div class="flex flex-col space-y-1">

    <div class="flex flex-col justify-between flex-1 sm:flex-row sm:space-x-8 md:justify-start">
        <label
            class="flex flex-col justify-center space-y-2 text-sm tracking-widest text-gray-700 transition duration-150 ease-in-out dark:text-gray-400"
            for="{{ $id }}"
        >
            {{ $label }}

            @if ($required)
                <span class="text-red-500">*</span>
            @endif

            <input
                accept="image/*"
                {!! $attributes->merge([
                    'class' => 'hidden placeholder-secondary-400 text-sm ',
                    'disabled' => $disabled ?? '',
                    'id' => $id ?? '',
                ]) !!}
            >

            <span class="text-xs text-gray-700">{{ $description }}</span>

            <span
                class="inline-flex items-center justify-center px-4 py-2 text-sm text-white transition-all duration-150 ease-in rounded outline-none cursor-pointer ring-primary-500 bg-primary-500 hover:bg-primary-600 hover:ring-primary-600 dark:bg-primary-700 dark:ring-primary-700 dark:hover:bg-primary-600 dark:hover:ring-primary-600 group gap-x-2 hover:shadow-sm focus:ring-2 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-80 dark:ring-offset-slate-800"
            >Selecione uma foto</span>
        </label>

        <div
            class="relative flex items-center justify-center order-first mx-auto my-2 bg-center bg-no-repeat bg-cover border border-gray-400 border-dashed rounded-lg h-28 w-28 bg-origin-padding sm:m-2 md:order-last">
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
                <img
                    class="h-28 w-28"
                    src="{{ is_string($resource) ? asset($resource) : $resource->temporaryUrl() }}"
                    alt="image preview"
                >
            @endif
        </div>
    </div>

    @error($id)
        <p class='text-sm text-red-600'>{{ $message }}</p>
    @enderror

</div>
{{--
@props(['disabled' => false, 'required' => true, 'id', 'label' => null, 'resource' => null, 'description' => ''])

<div class="flex flex-col space-y-1">

    <div
        x-data
        class="flex flex-col justify-between flex-1 sm:flex-row sm:space-x-8 md:justify-start"
    >
        <label
            class="flex flex-col justify-center space-y-2 text-sm tracking-widest text-gray-700 transition duration-150 ease-in-out dark:text-gray-400"
            for="{{ $id }}"
        >
            {{ $label }}

            @if ($required)
                <span class="text-red-500">*</span>
            @endif

            <input
                accept="image/*"
                x-ref="image"
                {!! $attributes->merge([
                    'class' => 'hidden placeholder-secondary-400 text-sm',
                    'disabled' => $disabled ?? '',
                    'id' => $id ?? '',
                ]) !!}
                x-on:change="
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        console.log(event.target.result);
                    },
                    reader.readAsDataUrl($refs.image.files[0]);
                "
            >

            <span class="text-xs text-gray-700">{{ $description }}</span>

            <span
                class="inline-flex items-center justify-center px-4 py-2 text-sm text-white transition-all duration-150 ease-in rounded outline-none cursor-pointer ring-primary-500 bg-primary-500 hover:bg-primary-600 hover:ring-primary-600 dark:bg-primary-700 dark:ring-primary-700 dark:hover:bg-primary-600 dark:hover:ring-primary-600 group gap-x-2 hover:shadow-sm focus:ring-2 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-80 dark:ring-offset-slate-800"
            >Selecione uma foto</span>
        </label>

        <div
            class="relative flex items-center justify-center order-first mx-auto my-2 bg-center bg-no-repeat bg-cover border border-gray-400 border-dashed rounded-lg h-28 w-28 bg-origin-padding sm:m-2 md:order-last">
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
                <img
                    class="h-28 w-28"
                    src="{{ is_string($resource) ? $resource : $resource->temporaryUrl() }}"
                    alt="image preview"
                >
            @endif
        </div>
    </div>

    @error($id)
        <p class='text-sm text-red-600'>{{ $message }}</p>
    @enderror

</div> --}}
