<?php

namespace App\Http\Livewire\Employee;

use App\Models\Product as ProductModel;
use App\Models\Store;
use Livewire\Component;

class Product extends Component
{
    public $visible = false;
    public ProductModel $product;

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
        $products = ProductModel::where('store_id',auth()->user()->store->id)->get();
        return view('livewire.employee.product', compact('products'));
    }
}