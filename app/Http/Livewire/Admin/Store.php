<?php

namespace App\Http\Livewire\Admin;

use App\Models\Store as StoreModel;
use App\Models\User;
use Livewire\Component;

class Store extends Component
{
    public $visible = false;
    public $users;
    public StoreModel $store;

    protected $rules = [
        'store.name' => 'required',
        'store.address' => 'required',
        'store.phone' => 'required|number',
        'store.employee_id' => 'required',
    ];

    public function create() 
    {
        $this->store = StoreModel::make();
        $this->visible = true;
    }
    
    public function edit(StoreModel $store)
    {
        $this->store = $store;
        $this->visible = true;
    }
    
    public function save()
    {
        StoreModel::updateOrCreate(
            ['id' => $this->store->id],
            [
                'name' => $this->store->name,
                'address' =>  $this->store->address,
                'phone' =>  $this->store->phone,
                'employee_id' =>  $this->store->employee_id,
            ]
        );
        $this->visible = false;
    }

    public function delete(StoreModel $store)
    {
        $store->delete();
    }

    public function render()
    {
        $stores = StoreModel::all();
        $this->users = User::all()->where('role', '<>', 1);
        return view('livewire.admin.store', compact('stores'));
    }
}