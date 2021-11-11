<x-jet-dialog-modal wire:model="visible">
  <x-slot name="title">
    {{__('Registra un encargado')}}
  </x-slot>
  <x-slot name="content">
    <x-jet-label class="text-base">Nombre</x-jet-label>
    <x-jet-input wire:model.defer="user.name" name="name" type="text" class="w-full my-2"
      placeholder="Nombre del encargado" />
    <x-jet-label class="text-base">Correo</x-jet-label>
    <x-jet-input wire:model.defer="user.email" name="email" type="email" class="w-full my-2"
      placeholder="Correo del encargado" />
      @if($createUser)
      <x-jet-label class="text-base">Contraseña</x-jet-label>
    <x-jet-input wire:model.defer="user.password" name="password" type="password" class="w-full my-2"
      placeholder="Contraseña del encargado" />
      @endif

  </x-slot>
  <x-slot name="footer">
    <x-jet-danger-button wire:click="$set('visible', false)">Cancelar</x-jet-danger-button>
    <button wire:click="save"
      class="inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition">
      Guardar
    </button>
  </x-slot>
</x-jet-dialog-modal>