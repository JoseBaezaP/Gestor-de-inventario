<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Store;
use App\Http\Livewire\Admin\Employee;
use App\Http\Livewire\Employee\Product;
use App\Http\Livewire\Employee\Allstores;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::get('/inventario', Product::class)->name('inventory');
    Route::get('/general', Allstores::class)->name('general');

    Route::group(['middleware' => 'is_admin', 'as' => 'register.'], function () {
        Route::get('/tiendas', Store::class)->name('stores');
        Route::get('/encargados', Employee::class)->name('employees');

    });
});