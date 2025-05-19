@props([
    'svgWidth' => 24
])

<div class="border-r border-gray-200 bg-gray-300 relative">
    <div class="p-1">
        <div class="p-0.5">
            <div style="width: {{$svgWidth}}px"></div>
        </div>
    </div>
    <div class="group absolute top-0 w-full hover:w-[200px] h-full bg-white hover:border-r border-gray-200 p-1 flex flex-col gap-0.5">
        {{ $slot }}
    </div>
</div>
