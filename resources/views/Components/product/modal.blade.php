<x-jet-dialog-modal wire:model="visible">
  <x-slot name="title">
    {{__('Registra un producto')}}
  </x-slot>
  <x-slot name="content">
    <x-jet-label class="text-base">Nombre del producto</x-jet-label>
    <x-jet-input wire:model.defer=product.name name="name" type="text" class="w-full my-2"
      placeholder="Nombre del producto" />
    <x-jet-label class="text-base">Existencias actuales</x-jet-label>
    <x-jet-input wire:model.defer=product.quantity name="quantity" type="text" class="w-full my-2"
      placeholder="0" />
    <x-jet-label class="text-base">Selecciona una sucursal</x-jet-label>
    <select name="store" wire:model.defer=product.store_id
      class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      <option selected>Selecciona una sucursal</option>
      @foreach($stores as $store)
      <option value="{{$store->id}}">{{$store->name}}</option>
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