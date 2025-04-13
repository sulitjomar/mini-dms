<div>
    <x-ui.button :type="'button'" wire:click="create">Add Vehicle</x-ui.button>

    <table>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->make }} {{ $vehicle->model }}</td>
                <td>
                    <x-ui.button :type="'button'" wire:click="edit({{ $vehicle->id }})">Edit</x-ui.button>
                </td>
            </tr>
        @endforeach
    </table>

    <livewire:inventory.form :editing-id="$editingId" />
</div>
