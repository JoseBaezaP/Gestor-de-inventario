<?php

namespace App\Http\Livewire\Employee;

use App\Models\Product as ProductModel;
use App\Models\Store;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Allstores extends Component
{
    use WithPagination;
    
    public $visible = false, $search;
    public $employee;
    public Store $store;

    protected $rules = [
        'store.name' => 'required',
        'store.address' => 'required',
        'store.phone' => 'required|number',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function show($id)
    {
        $this->store = Store::findOrFail($id);
        $this->employee = $this->store->user->name;
        $this->visible = true;
    }
    
    public function render()
    {
        $products = ProductModel::with('store')->where('name', 'like', '%'.$this->search.'%')->paginate(10);
        return view('livewire.employee.allstores', compact('products'));
    }
}