@props([
    'tabs' => [],
])

<div
    x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton) {
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton) {
            this.$refs.tabMarker.style.width = tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height = tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left = tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent) {
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        }
    }"
    x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);"
    class="relative w-full max-w-sm"
>
    <div
        x-ref="tabButtons"
        class="relative inline-grid items-center justify-center w-full h-10 p-1 text-gray-500 bg-gray-100 rounded-lg select-none"
        style="grid-template-columns: repeat({{ count($tabs) }}, minmax(0, 1fr))"
    >
        @foreach($tabs as $index => $tab)
            <button
                :id="$id(tabId)"
                @click="tabButtonClicked($el);"
                type="button"
                class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap"
            >
                {{ $tab['title'] }}
            </button>
        @endforeach
        <div
            x-ref="tabMarker"
            class="absolute left-0 z-10 h-full duration-300 ease-out"
            style="width: {{ 100 / count($tabs) }}%"
            x-cloak
        >
            <div class="w-full h-full bg-white rounded-md shadow-sm"></div>
        </div>
    </div>
    <input
        type="hidden"
        name="selected_tab"
        x-model="tabSelected"
    >
    <div class="relative w-full mt-2 content">
        {{ $slot }}
    </div>
</div>
