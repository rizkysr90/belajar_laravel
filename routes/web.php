<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\UsersController;


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
    return view('tailwind.welcome');
})->name('login')->middleware('guest');

Route::get('/about', function () {
    return view('about');
});

Route::get('/products',[ProductsController::class,'getAll'])->middleware('auth');
Route::group(['prefix' => 'products'], function() {
    Route::get('/create', [ProductsController::class, 'create'])->middleware('auth');
    Route::post('/store', [ProductsController::class, 'store'])->middleware('auth');
    Route::get('/delete/{id}',[ProductsController::class, 'destroy'])->middleware('auth');
    Route::get('/edit/{id}',[ProductsController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}',[ProductsController::class, 'update'])->middleware('auth');
    Route::get('/detail/{id}',[ProductsController::class, 'view'])->middleware('auth');

});

Route::group(['prefix' => 'suppliers'], function() {
    Route::get('/store', [SuppliersController::class, 'store'])->middleware('auth');
});

Route::get('/purchases', [PurchasesController::class, 'getAll'])->middleware('auth');
Route::group(['prefix' => 'purchases'], function() {
    Route::get('/create', [PurchasesController::class, 'create'])->middleware('auth');
    Route::post('/store', [PurchasesController::class, 'store'])->middleware('auth');

});

Route::group(['prefix' => 'users'], function() {
    Route::get('/store', [UsersController::class, 'store']);
    Route::post('/login', [UsersController::class, 'login']);
    Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth');
    Route::get('/kasir/register', [UsersController::class, 'registerKasir'])->middleware('auth');
    Route::post('/kasir/register', [UsersController::class, 'storeKasir'])->middleware('auth');

});

Route::get('suppliers/create', [SuppliersController::class, 'create']);
Route::post('/suppliers/store',[SuppliersController::class, 'store']);
Route::get('/suppliers', [SuppliersController::class, 'index']);



// GAK KEPAKE
// Route for employee
Route::get('/view_employee',[EmployeeController::class,'index']);
Route::get('/delete_employee',[EmployeeController::class,'delete']);
Route::get('/edit_employee',[EmployeeController::class,'edit']);

Route::get('/simpan_test',[ProductsController::class,'simpan_get']);
Route::get('/hapus_test/{id}',[ProductsController::class,'hapus_get']);
Route::get('/update_test/{id}',[ProductsController::class,'update_get']);