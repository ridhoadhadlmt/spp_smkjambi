@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 mx-2 rounded-lg border-pink-400 text-base no-underline font-medium text-white bg-pink-500 focus:outline-none focus:text-pink-800 focus:bg-pink-100 focus:border-pink-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 mx-2 rounded-lg border-transparent text-base no-underline font-medium text-gray-600 hover:text-gray-700 hover:bg-gray-100 hover:border-pink-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-pink-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
