<div 
    x-data="{ open: @entangle('isOpen') }"
    x-init="
        window.addEventListener('open-modal', e => {
            $wire.call('showModal', e.detail.title, e.detail.content);
        });
    "
    x-show="open"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    style="display: none;"
>
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 relative">
        <div class="p-4 border-b">
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
            <button @click="open = false; @this.closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                &times;
            </button>
        </div>
        <div class="p-4">
            @if($content)
                {!! $content !!} <!-- Render the content passed to the modal -->
            @endif
        </div>
        <div class="p-4 border-t flex justify-end">
            <button @click="open = false; @this.closeModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancel</button>
            <button @click="open = false; @this.closeModal()" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Confirm</button>
        </div>
    </div>
</div>
