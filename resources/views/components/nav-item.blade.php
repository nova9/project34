@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'text-gray-900' : '' }} mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900 cursor-pointer"
   aria-current="{{ $active ? 'page' : '' }}"
>
    {{ $slot }}
</a>
