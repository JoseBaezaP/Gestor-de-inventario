<div>
  <div class="py-8 mx-auto">
    <div class="mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 grid grid-row-3">
        <div class="grid grid-cols-4 row-start-1">
          <x-jet-input type="text" wire:model="search" class="mb-5 w-full col-start-1 col-span-2 flex-1"
            placeholder="Escriba el nombre del producto" />
          <div class="flex justify-end mr-5">
            <input type="file" wire:model="file" class="opacity-0 absolute w-24 h-11 cursor-pointer" />
            <span class="bg-green-500 hover:bg-green-600 p-2 -z-10 text-white mb-5 sm:rounded-lg">
              Subir excel
            </span>
            </input>
          </div>
          <button class="bg-blue-500 hover:bg-blue-600 p-2 text-white mb-5 sm:rounded-lg" wire:click="create">
            Añadir Producto
          </button>
        </div>
        <x-product.table>
          @foreach ($products as $product)
          <tr>
            <td class="border p-5">{{$product->name}}</td>
            <td class="border p-5 grid place-items-center grid-flow-col">
              <button class="w-6 bg-gray-200 rounded-full" wire:click="decrement({{$product->id}})">-</button>
              <span>{{$product->quantity}}</span>
              <button class="w-6 bg-gray-200 rounded-full" wire:click="increment({{$product->id}})">+</button>
            </td>
            <td class="border p-5 text-center">{{number_format($product->price,2)}}</td>
            <td class="text-center border p-5">
              <div class="grid grid-cols-4">
                <div class="text-center col-start-2" wire:click="edit({{$product->id}})">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto cursor-pointer" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
                </div>
                <div class="text-red-500 cursor-pointer" wire:click="delete({{$product->id}})">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto cursor-pointer" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </x-product.table>
        <div class="my-5">
          {{ $products->links() }}
        </div>
      </div>
    </div>
  </div>
  <x-product.modal />
</div>