<?php

namespace App\Http\Livewire\Employee;

use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;

use App\Models\Product as ProductModel;
use App\Imports\ProductsImport;
use App\Models\Store;

use Maatwebsite\Excel\Facades\Excel;


class Product extends Component
{
    use WithFileUploads;
    use WithPagination;
    
    public $visible = false;
    public ProductModel $product;
    public $file, $search;

    protected $rules = [
        'product.name' => 'required',
        'product.quantity' => 'required|number',
        'product.price' => 'required|number'
    ];

    public function create() 
    {
        $this->product = ProductModel::make();
        $this->visible = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedFile($value) {
        Excel::import(new ProductsImport, $this->file);
    }

    public function edit(ProductModel $product)
    {
        $this->product = $product;
        $this->visible = true;
    }

    public function decrement(ProductModel $product)
    {
        if($product->quantity > 0) {
            $product->decrement('quantity');
        }
    }

    public function increment(ProductModel $product)
    {
       $product->increment('quantity');
    }

    public function save()
    {
        ProductModel::updateOrCreate(
            ['id' => $this->product->id],
            [
                'name' => $this->product->name,
                'quantity' => $this->product->quantity,
                'price' => $this->product->price,
                'store_id' => auth()->user()->store->id,
            ]
        );
        $this->visible = false;
    }

    public function delete(ProductModel $product)
    {
        $product->delete();
    }

    public function render()
    {
        $products = ProductModel::where('store_id',auth()->user()->store->id)
                    ->where('name', 'like', '%'.$this->search.'%')
                    ->paginate(10);
        return view('livewire.employee.product', compact('products'));
    }
}