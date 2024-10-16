@props(['size' => 'small'])

@php

    $sizeClass = match($size) {
        'small' => 'text-sm px-4 py-2',
        'medium' => 'text-base px-6',
        'large' => 'text-lg px-8',
        'xl' => 'text-xl px-10 py-2.5',
    };
@endphp

<a {{$attributes->merge(['class'=> 'transition-all duration-700 bg-textColor hover:bg-backgroundElevatedColor rounded-3xl text-sm text-white flex items-center justify-center ' . $sizeClass])}}>
    {{$slot}}
</a>
