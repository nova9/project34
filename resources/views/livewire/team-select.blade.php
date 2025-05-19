<div class="flex items-center gap-2">
    <span class="text-sm font-medium">
        {{ $this->selectedTeamName }}
    </span>
    <div x-data="{ open: false }" class="relative">
        <div @click="open = !open" class="-space-y-2 hover:bg-gray-100 p-1 rounded-sm">
            <i data-lucide="chevron-up" class="size-4"></i>
            <i data-lucide="chevron-down" class="size-4"></i>
        </div>

        <div
            x-show="open"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute left-0 z-10 w-64 mt-2 rounded-lg bg-white shadow-md border border-gray-100"
            @click.outside="open = false"
        >
            <div class="border-b border-gray-200 py-2 px-2 flex items-center gap-2">
                <i data-lucide="search" class="size-4 text-gray-400"></i>
                <input type="text" class="w-full text-xs border-none focus:outline-none" placeholder="Search...">
            </div>

            <div class="border-b border-gray-200 py-1 px-1">
                @foreach($teams as $item)
                    <div class="flex gap-2 hover:bg-gray-100 rounded-sm p-2 cursor-pointer text-gray-600">
                        <span class="text-xs">{{ $item->name }}</span>
                    </div>
                @endforeach

            </div>

            <div class="py-1 px-1">
                <div class="flex gap-2 hover:bg-gray-100 rounded-sm p-2 cursor-pointer text-gray-600">
                    <i data-lucide="plus" class="size-4"></i>
                    <span class="text-xs">Create new team</span>
                </div>
            </div>

        </div>
    </div>
</div>
