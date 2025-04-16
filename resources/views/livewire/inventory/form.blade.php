<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Vehicle Information</h2>
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-1 gap-4">
            <x-ui.input name="vin" label="VIN" wire:model.defer="vin" />
            <x-ui.input name="make" label="Make" wire:model.defer="make" />
            <x-ui.input name="model" label="Model" wire:model.defer="model" />
            <x-ui.input name="year" label="Year" type="number" wire:model.defer="year" />
            <x-ui.input name="color" label="Color" wire:model.defer="color" />
            <x-ui.input name="mileage" label="Mileage" type="number" wire:model.defer="mileage" />
            <x-ui.input name="price" label="Price" type="number" step="0.01" wire:model.defer="price" />
            <x-ui.select name="status" label="Status" :options="[
                'available' => 'Available',
                'sold' => 'Sold',
                'reserved' => 'Reserved'
            ]" wire:model.defer="status" />
        </div>

        <div class="flex justify-end space-x-2 mt-6">
            <x-ui.button type="button" color="gray" label="Cancel" @click="$dispatch('close-form')" />
            <x-ui.button type="submit" color="blue" label="Save" />
        </div>
    </form>
</div>
