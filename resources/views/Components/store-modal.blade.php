<x-jet-dialog-modal wire:model="visible">
  <x-slot name="title">
    {{__('Registra una tienda')}}
  </x-slot>
  <x-slot name="content">
    <x-jet-label class="text-base">Nombre</x-jet-label>
    <x-jet-input wire:model.defer="store.name" name="name" type="text" class="w-full my-2"
      placeholder="Nombre de la tienda" />
    <x-jet-label class="text-base">Dirección</x-jet-label>
    <x-jet-input wire:model.defer="store.address" name="address" type="text" class="w-full my-2"
      placeholder="Direccion de la tienda" />
    <x-jet-label class="text-base">Teléfono</x-jet-label>
    <x-jet-input wire:model.defer="store.phone" name="phone" type="number" class="w-full my-2"
      placeholder="Teléfono de la tienda" />
    <x-jet-label class="text-base">Selecciona un encargado</x-jet-label>
    <select name="employee" wire:model.defer="store.employee_id"
      class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      <option selected>Selecione a un encargado</option>
      @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>

  </x-slot>
  <x-slot name="footer">
    <x-jet-danger-button wire:click="$set('visible', false)">Cancelar</x-jet-danger-button>
    <button wire:click="save"
      class="inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition">
      Guardar
    </button>
  </x-slot>
</x-jet-dialog-modal>