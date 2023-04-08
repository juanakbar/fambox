@props(['active'])

@php
    $classes = $active ?? false ? 'w-full text-white bg-[#C6D166] hover:bg-[#C6D166]/90 focus:ring-4 focus:outline-none focus:ring-[#C6D166]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2' : 'w-full text-black hover:text-white hover:bg-[#C6D166]/90 focus:ring-4 focus:ring-green-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
