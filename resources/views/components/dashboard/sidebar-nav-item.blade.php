@props([
    'label' => '',
    'active' => false,
])


<a {{ $attributes->merge(['class' => 'cursor-pointer rounded-md flex items-center p-1 gap-2 ' . ($active ? 'bg-gray-100 text-gray-900' : 'hover:bg-gray-100 text-gray-600 hover:text-gray-900')]) }}>
    <div class="shrink-0">
        {{ $slot }}
    </div>
    <span class="{{ $active ? 'hidden group-hover:block font-medium leading-0' : 'invisible group-hover:visible' }} text-sm ">
        {{ $label }}
    </span>
</a>
