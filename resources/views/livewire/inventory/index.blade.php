<div>
    <x-ui.button :type="'button'" :color="'blue'" :label="'Add Vehicle'" wire:click="create">Add Vehicle</x-ui.button>
    <!-- Responsive Table Wrapper -->
    <div class="overflow-x-auto mt-4">
        <table class="min-w-full table-auto text-sm sm:text-base">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-2 font-semibold text-gray-600">Vehicle</th>
                    <th class="px-4 py-2 font-semibold text-gray-600">Year</th>
                    <th class="px-4 py-2 font-semibold text-gray-600">Color</th>
                    <th class="px-4 py-2 font-semibold text-gray-600">Mileage</th>
                    <th class="px-4 py-2 font-semibold text-gray-600">Price</th>
                    <th class="px-4 py-2 font-semibold text-gray-600">Status</th>
                    <th class="px-4 py-2 font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $vehicle->make }} {{ $vehicle->model }}</td>
                        <td class="px-4 py-2">{{ $vehicle->year }}</td>
                        <td class="px-4 py-2">{{ $vehicle->color }}</td>
                        <td class="px-4 py-2">{{ $vehicle->mileage }} miles</td>
                        <td class="px-4 py-2">${{ number_format($vehicle->price, 2) }}</td>
                        <td class="px-4 py-2 capitalize">{{ $vehicle->status }}</td>
                        <td class="px-4 py-2">
                            <x-ui.button :type="'button'" wire:click="edit({{ $vehicle->id }})" :color="'blue'" :label="'Edit'" class="text-white text-xs" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add this line to pass the editingId to the modal -->
    <livewire:inventory.form :editing-id="$editingId" />
</div>
