<div x-data="{ modalOpen: false }"
     @keydown.escape.window="modalOpen = false"
     class="relative w-auto h-auto"
>
    <!-- Trigger Button -->
    <div @click="modalOpen = true" class="cursor-pointer">
    {{ $trigger }}
</div>


<!-- Modal Content -->
<template x-teleport="body">
    <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
         x-cloak>
        <!-- Overlay -->
        <div x-show="modalOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-40"
             x-transition:leave="ease-in duration-300"
             x-transition:leave-start="opacity-40"
             x-transition:leave-end="opacity-0"
             @click="modalOpen = false"
             class="absolute inset-0 w-full h-full bg-black opacity-40"></div>

        <!-- Modal Panel -->
        <div x-show="modalOpen"
             x-trap.inert.noscroll="modalOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative w-full p-6 bg-white sm:max-w-lg sm:rounded-lg">
            <!-- Modal Header -->
            <div class="flex justify-between mb-4">
                {{--            press esc to close text--}}
                <span class="text-xs text-gray-500 mr-2">Press <kbd class="bg-gray-200 rounded px-1">Esc</kbd> to close</span>


                <button type="button"
                        @click="modalOpen = false"
                        class="text-gray-700 text-sm font-medium rounded-full hover:bg-gray-100 size-6 p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-x-icon lucide-x">
                        <path d="M18 6 6 18"/>
                        <path d="m6 6 12 12"/>
                    </svg>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="relative w-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</template>
</div>
