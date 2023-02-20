@props(['disabled' => false, 'required' => true, 'id' => null, 'label' => null])

@php
    $classes = $errors->has($id)
        ? 'placeholder-secondary-400 text-sm bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500'
        : 'placeholder-secondary-400 text-sm border-gray-300 invalid:border-red-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:bg-slate-100 disabled:cursor-not-allowed rounded-md shadow-sm';
@endphp

<div class="flex flex-col space-y-1">

    {{-- label if exists --}}
    @if (!is_null($label))
        <label
            class="block text-sm font-medium text-gray-700 dark:text-gray-400"
            for="{{ $id }}"
        >
            {{ $label }}

            {{-- star red if required true --}}
            @if ($required) <span class="text-red-500">*</span> @endif
        </label>
    @endif

    {{-- input --}}
    <input {!! $attributes->merge(['class' => $classes, 'disabled' => $disabled ?? '', 'id' => $id ?? '']) !!}>

    {{-- error if exists --}}
    @error($id)
        <p class='text-sm text-red-600'>{{ $message }}</p>
    @enderror

</div>
