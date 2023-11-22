<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;
use App\Models\Customers;

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

// Route::get('/{name?}', function ($name = null) {
//     $data = compact('name');
//     return view('home')->with($data);
// });

Route::get('/', [DemoController::class, 'index']);
Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/customer/view', [UserController::class, 'view']);
Route::get('/customer/delete/{id}', [UserController::class, 'delete_user']);
Route::get('/customer/edit/{id}', [UserController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [UserController::class, 'update'])->name('customer.update');
Route::get('/customer', function () {
    $cusromer = Customers::all();
    echo '<pre>';
    print_r($cusromer->toArray());
});
