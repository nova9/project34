@props([
    'buttonText' => '',
])

<div x-data="{
        handleOpenModal() {
            this.$refs.modal.showModal();
        },
        handleCloseModal() {
            this.$refs.modal.close();
        }
    }">
    <button
        @click="handleOpenModal()"
        class="flex items-center px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-700 transition-colors">
        {{ $buttonText }}
        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 4v16m8-8H4"/>
        </svg>
    </button>

    <dialog
        x-ref="modal"
        class="modal fixed top-1/2 left-1/2 -translate-1/2 rounded-md p-6 shadow-sm"
    >
        <div class="flex justify-between mb-2">
{{--            press esc to close text--}}
            <span class="text-xs text-gray-500 mr-2">Press <kbd class="bg-gray-200 rounded px-1">Esc</kbd> to close</span>


            <button type="button"
                    @click="handleCloseModal()"
                    class="text-gray-700 text-sm font-medium rounded-full hover:bg-gray-100 size-6 p-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>
        <div class="w-96">
            {{ $slot }}
        </div>
    </dialog>
</div>


<style>
    .modal::backdrop {
        background-color: rgba(0, 0, 0, 0.5);
    }
</style>
