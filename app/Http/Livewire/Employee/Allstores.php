<?php

namespace App\Http\Livewire\Employee;

use App\Models\Product as ProductModel;
use App\Models\Store;
use App\Models\User;
use Livewire\Component;

class Allstores extends Component
{
    public $visible = false;
    public Store $store;

    public function show($id)
    {
        $this->store = Store::findOrFail($id);
        $this->visible = true;
    }
    
    public function render()
    {
        $products = ProductModel::with('store')->get();
        return view('livewire.employee.allstores', compact('products'));
    }
}