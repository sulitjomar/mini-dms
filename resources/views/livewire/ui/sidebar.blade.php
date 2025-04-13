<div x-data="{ open: @entangle('isOpen') }" x-init="$watch('open', value => console.log('Sidebar open:', value))">
    <!-- Sidebar -->
    <aside 
        x-cloak
        x-show="open || window.innerWidth >= 768"
        x-transition:enter="transition ease-in-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="w-64 min-h-screen bg-gray-900 text-white p-4 shadow-lg fixed md:relative z-50 transform md:translate-x-0"
    >
        <!-- Close button for mobile -->
        <button @click="$wire.toggle()" class="md:hidden text-white p-2 rounded-md mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Sidebar Navigation -->
        <nav class="space-y-2">
            @foreach ($items as $item)
                <x-ui.menu-item
                    :label="$item['label']"
                    :icon="$item['icon'] ?? null"
                    :route="$item['route']"
                    :active="$activeItem === $item['label']"
                    wire:click="setActive('{{ $item['label'] }}')"
                />
            @endforeach
        </nav>
    </aside>

    <!-- Mobile overlay -->
    <div 
        x-cloak
        x-show="open && window.innerWidth < 768"
        x-transition.opacity
        @click="$wire.toggle()"
        class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"
    ></div>
</div>
