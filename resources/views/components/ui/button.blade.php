<button type="{{ $type }}" class="px-4 py-2 text-white rounded {{ 
    'bg-' . $color . '-600' }} 
    {{ $size === 'large' ? 'text-lg py-3 px-6' : 'text-sm py-2 px-4' }} 
    hover:bg-{{ $color }}-700 focus:outline-none focus:ring-2 focus:ring-{{ $color }}-500">
    {{ $label }}
</button>
