<?php

namespace App\Http\Livewire\Admin;

use App\Models\Store as StoreModel;
use Livewire\Component;

class Store extends Component
{
    public $visible = false;
    
    public function render()
    {
        $stores = StoreModel::all();
        return view('livewire.admin.store', compact('stores'));
    }
}