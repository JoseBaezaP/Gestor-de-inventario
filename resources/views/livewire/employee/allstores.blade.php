<div>
  <div class="py-8 mx-auto">
    <div class="mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 grid grid-row-3">
        <x-jet-input type="text" wire:model="search" class="mb-5 w-full sm:w-1/2"
          placeholder="Escriba el nombre del producto" />
        <div class="my-5">
          {{ $products->links() }}
        </div>
      </div>
    </div>
  </div>
</div>