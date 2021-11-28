<div>
  <div class="py-8 mx-auto">
    <div class="mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 grid grid-row-3">
        <x-allstores.table>
          @foreach ($products as $product)
          @if($product->quantity)
          <tr>
            <td class="border p-5">{{$product->name}}</td>
            <td class="border p-5 text-center">{{$product->quantity}}</td>
            <td class="border p-5 text-center">{{number_format($product->price,2)}}</td>
            <td class="border p-5 relative text-center">
              <span>{{$product->store->name}}</span>
              <button wire:click="show({{$product->store->id}})"
                class="absolute bg-gray-300 w-4 rounded-full text-xs ml-2">i</button>
            </td>
          </tr>
          @endif
          @endforeach
        </x-allstores.table>
      </div>
    </div>
  </div>
  <x-allstores.modal :store="$store" />
</div>