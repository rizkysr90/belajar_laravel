<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function getAll(){
        return view('all_products',
            [
                "products" => Products::all()
            ]
        );
    }
}
