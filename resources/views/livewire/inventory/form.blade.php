<div>
    <div class="p-4">
        <form wire:submit.prevent="save">
            <x-ui.input label="VIN" wire:model.defer="vin" />
            <x-ui.input label="Make" wire:model.defer="make" />
            <x-ui.input label="Model" wire:model.defer="model" />
            <x-ui.input label="Year" type="number" wire:model.defer="year" />
            <x-ui.input label="Color" wire:model.defer="color" />
            <x-ui.input label="Mileage" type="number" wire:model.defer="mileage" />
            <x-ui.input label="Price" type="number" step="0.01" wire:model.defer="price" />
            <x-ui.select label="Status" wire:model.defer="status">
                <option value="available">Available</option>
                <option value="sold">Sold</option>
                <option value="reserved">Reserved</option>
            </x-ui.select>

            <div class="flex justify-end space-x-2 mt-4">
                <x-ui.button type="button" color="gray" label="Cancel" @click="$dispatch('close-form')" />
                <x-ui.button type="submit" color="blue" label="Save" />
            </div>
        </form>
    </div>
</div>
