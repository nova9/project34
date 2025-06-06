@props([
    'label' => '',
    'active' => false,
    'icon' => null,
    'variant' => 'default', // Added variant prop with default value
    'noLink' => false,
])

@php
    // Define variant-specific classes
    $variantClasses = [
        'default' => [
            'base' => 'text-gray-600 hover:text-gray-900 hover:bg-gray-100',
            'active' => 'bg-gray-200 text-gray-900',
        ],
        'danger' => [
            'base' => 'text-red-500 hover:text-red-600 hover:bg-red-50',
            'active' => 'bg-red-200 text-red-600',
        ],
    ];

    // Determine classes based on variant and active state
    $classes = 'cursor-pointer rounded-md flex items-center p-0.5 gap-2 transition-all duration-300 ';
    $classes .= $active ? $variantClasses[$variant]['active'] : $variantClasses[$variant]['base'];
@endphp

@if($noLink)
    <div {{ $attributes->merge(['class' => $classes]) }}>
        <div class="shrink-0">
{{--            <i data-lucide="{{ $icon }}"></i>--}}
            <img src="/assets/images/skeuomorphic/{{$icon}}.webp" class="size-10" alt="icon">
        </div>
        <span
            class="{{ $active ? 'hidden group-hover:block font-medium leading-0' : 'invisible group-hover:visible' }} text-sm font-medium"
        >
            {{ $label }}
        </span>
    </div>
@else
    <a {{ $attributes->merge(['class' => $classes]) }} wire:navigate.hover>
        <div class="shrink-0">
            {{--        <i data-lucide="{{ $icon }}"></i>--}}
            <img src="/assets/images/skeuomorphic/{{$icon}}.webp" class="size-10" alt="icon">
        </div>
        <span
            class="{{ $active ? 'hidden group-hover:block font-medium leading-0' : 'invisible group-hover:visible' }} text-sm font-medium"
        >
        {{ $label }}
        </span>
    </a>
@endif
