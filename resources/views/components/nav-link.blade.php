@props(['active', 'as'])

@php
    $as = $as ?? 'a';
    $classes = $active ?? false ? 'block py-2 pl-3 pr-4 text-white bg-[#C6D166] rounded md:bg-transparent md:text-[#C6D166] md:p-0 md:dark:text-blue-500' : 'block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700';
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    </{{ $as }}>
