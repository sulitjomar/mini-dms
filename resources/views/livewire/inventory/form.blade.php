<x-modals.simple-with-dismiss-button>
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
        <x-ui.button :type="'button'">Save</x-ui.button>
    </form>
</x-modals.simple-with-dismiss-button>
