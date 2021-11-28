<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'quantity',
        'store_id',
        'price'
        ];
   
    public function store() {
        return $this->hasOne(Store::class,'id','store_id');
    }
}