<div>
  <x-header />
  <div class="py-8 mx-auto">
    <div class="mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 grid grid-row-3">
        <div class="row-start-1 text-right">
          <button class="bg-green-600 hover:bg-green-700 p-2 text-white mb-5 sm:rounded-lg"
            wire:click="$set('visible', true)">
            Crear Tienda
          </button>
        </div>
        <x-store-table>
          @foreach ($stores as $store)
          <tr>
            <td class="border p-5">{{$store->name}}</td>
            <td class="border p-5">{{$store->address}}</td>
            <td class="border p-5">{{$store->phone}}</td>
            <td class="border p-5"> {{$store->user->name}}</td>
            <td class="text-center border p-5">
              <x-jet-button>Editar</x-jet-button>
              <x-jet-danger-button>Eliminar</x-jet-danger-button>
            </td>
          </tr>
          @endforeach
        </x-store-table>
      </div>
    </div>
  </div>
  <x-store-modal />
</div>