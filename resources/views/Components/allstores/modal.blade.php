<x-jet-dialog-modal wire:model="visible">
  <x-slot name="title">
    {{__('Informacion de la tienda')}}
  </x-slot>
  <x-slot name="content">
    <x-jet-label class="text-base">Nombre</x-jet-label>
    <x-jet-input name="name" type="text" class="w-full my-2" wire:model="store.name" disabled />
    <x-jet-label class="text-base">Dirección</x-jet-label>
    <x-jet-input name="address" type="text" class="w-full my-2" wire:model="store.address" disabled />
    <x-jet-label class="text-base">Teléfono</x-jet-label>
    <x-jet-input name="phone" type="number" class="w-full my-2" wire:model="store.phone" disabled />
    <x-jet-label class="text-base">Encargado encargado</x-jet-label>
    <x-jet-input name="phone" type="text" class="w-full my-2" wire:model="employee" disabled />
  </x-slot>
  <x-slot name="footer">
    <x-jet-danger-button wire:click="$set('visible', false)">Cancelar</x-jet-danger-button>
  </x-slot>
</x-jet-dialog-modal>