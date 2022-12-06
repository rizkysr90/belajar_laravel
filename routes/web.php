<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/semua-barang', [BarangController::class,'index']);

// // Dynamic Route
// Route::get('/barang/{slug}',[BarangController::class,'show']);

// // Group Route
// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/dashboard',function() {
//         echo "Ini routes dasbor yang diakses via group";
//     });
    
// });

Route::get('/products',[ProductsController::class,'getAll']);
Route::get('/simpan_test',[ProductsController::class,'simpan_get']);
Route::get('/hapus_test/{id}',[ProductsController::class,'hapus_get']);
Route::get('/update_test/{id}',[ProductsController::class,'update_get']);


Route::group(['prefix' => 'products'], function() {
    Route::get('/create', [ProductsController::class, 'create']);
    Route::post('/store', [ProductsController::class, 'store']);
    Route::get('/delete/{id}',[ProductsController::class, 'destroy']);
    Route::get('/edit/{id}',[ProductsController::class, 'edit']);


});

// Route for employee
Route::get('/view_employee',[EmployeeController::class,'index']);
Route::get('/delete_employee',[EmployeeController::class,'delete']);
Route::get('/edit_employee',[EmployeeController::class,'edit']);