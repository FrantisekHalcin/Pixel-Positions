@props(['size' => 'small'])

@php
$classes = 'h-fit w-fit py-1 bg-white/10 hover:bg-white/20 rounded-xl transition-colors duration-500';

    if($size === 'small') {
        $classes .= ' text-[10px] px-2';
    } else {
        $classes .= 'text-[14px] px-3';
    }
@endphp

<a {{ $attributes }} class="{{ $classes }}">{{ $slot }}</a>
