@props(['name'])

<x-icon name="{{ $name }}" {{ $attributes->merge(['class' => 'w-5 h-5']) }} />
