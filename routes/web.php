<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductsController;
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