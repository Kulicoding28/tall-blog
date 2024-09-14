@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'block w-full px-4 py-3 mb-4 border border-1 border-transparent border-red-700 rounded-lg focus:borrder-none focus:ring',
]) !!}>
