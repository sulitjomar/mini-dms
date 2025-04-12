<a href="{{ $route }}" class="flex items-center space-x-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition">
    @if($icon)
        @svg($icon, 'w-5 h-5 text-gray-400')
    @endif
    <span>{{ $label }}</span> 
</a>