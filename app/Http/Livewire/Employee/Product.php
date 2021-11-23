<?php

namespace App\Http\Livewire\Employee;

use App\Models\Product as ProductModel;
use App\Models\Store;
use Livewire\Component;

class Product extends Component
{
    public $visible = false;
    public $stores;
    public $location = 1;
    public ProductModel $product;

    protected $rules = [
        'product.name' => 'required',
        'product.quantity' => 'required|number',
        'product.store_id' => 'required',
        'product.updated_at' => 'required',
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

    public function save()
    {
        ProductModel::updateOrCreate(
            ['id' => $this->product->id],
            [
                'name' => $this->product->name,
                'quantity' =>  $this->product->quantity,
                'store_id' =>  $this->product->store_id,
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
        $products = ProductModel::where('store_id',$this->location)->get();
        $this->stores = Store::all();
        return view('livewire.employee.product', compact('products'));
    }
}
