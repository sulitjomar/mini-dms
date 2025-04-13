<div x-data="{ open: false }" x-init="@this.on('open-form', () => { open = true })">
    <div x-show="open" class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Add/Edit Vehicle</h5>
                    <button type="button" class="close" @click="open = false" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content goes here, e.g., your vehicle form -->
                    <livewire:inventory.form :editing-id="$editingId" />
                </div>
                <div class="modal-footer">
                    <x-ui.button type="button" color="gray" label="Close" @click="open = false" />
                    <x-ui.button type="button" color="blue" label="Save changes" wire:click="saveChanges" />
                </div>
            </div>
        </div>
    </div>
</div>
