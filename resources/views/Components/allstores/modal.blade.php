<x-jet-dialog-modal wire:model="visible">
  <x-slot name="title">
    {{__('Registra una tienda')}}
  </x-slot>
  <x-slot name="content">
    <x-jet-label class="text-base">Nombre</x-jet-label>
    <x-jet-input name="name" type="text" class="w-full my-2" value="{{$store?->name}}" placeholder="Nombre de la tienda"
      disabled />
    <x-jet-label class="text-base">Dirección</x-jet-label>
    <x-jet-input name="address" type="text" class="w-full my-2" value="{{$store?->address}}"
      placeholder="Direccion de la tienda" disabled />
    <x-jet-label class="text-base">Teléfono</x-jet-label>
    <x-jet-input name="phone" type="number" class="w-full my-2" value="{{$store?->phone}}"
      placeholder="Teléfono de la tienda" disabled />
    <x-jet-label class="text-base">Encargado encargado</x-jet-label>
    <x-jet-input name="phone" type="text" class="w-full my-2" value="{{$store?->user->name}}"
      placeholder="Teléfono de la tienda" disabled />
  </x-slot>
  <x-slot name="footer">
    <x-jet-danger-button wire:click="$set('visible', false)">Cancelar</x-jet-danger-button>
  </x-slot>
</x-jet-dialog-modal>