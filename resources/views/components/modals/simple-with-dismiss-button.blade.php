<div x-data="{ open: false }"
     x-init="
         Livewire.on('open-form', () => {
             console.log('Received open-form, setting open to true');
             open = true
         });
         Livewire.on('close-form', () => {
             console.log('Received close-form, setting open to false');
             open = false
         });
     ">
    <div x-show="open" class="modal fade" style="display: block;">
        <div class="modal-content">
            {{ $slot }}
        </div>
    </div>
</div>
