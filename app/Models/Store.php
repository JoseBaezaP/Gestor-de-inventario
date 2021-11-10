<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
     'name',
     'address',
     'phone',
     'employee_id',
     ];

   public function user() {
        return $this->hasOne(User::class,'id','employee_id');
   }
}