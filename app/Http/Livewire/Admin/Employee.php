<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class Employee extends Component
{
    public $visible = false, $createUser = true;
    public User $user;

    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required',
        'user.role' => 'required|number',
        'user.password' => 'required',
    ];

    public function create() 
    {
        $this->user = User::make();
        $this->visible = true;
        $this->createUser = true;
    }
    
    public function edit(User $user)
    {
        $this->user = $user;
        $this->visible = true;
        $this->createUser = false;
    }
    
    public function save()
    {
        if($this->user->id) {
            User::where('id',$this->user->id)
            ->update([
                'name' => $this->user->name,
                'email' => $this->user->email
            ]);
        } else {
            User::create([
                'name' => $this->user->name,
                'email' => $this->user->email,
                'role' => 0,
                'password'=> Hash::make($this->user->password)
            ]);
        }

        $this->visible = false;
    }

    public function delete(User $user)
    {
        $user->delete();
    }

    public function render()
    { 
        $users = User::all()->where('role', '<>', 1);
        return view('livewire.admin.employee', compact('users'));
    }
}
