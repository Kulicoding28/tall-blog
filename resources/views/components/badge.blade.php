@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'gray' => 'text-gray-100',
        default => 'text-gray-100',
    };
@endphp

<a href="#" class="bg-red-700 text-white rounded-xl px-3 py-1 text-base">{{ $slot }}</a>
