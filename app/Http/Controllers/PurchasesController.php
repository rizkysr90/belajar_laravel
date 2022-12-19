<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Products;
use App\Models\Supplier;
use RealRashid\SweetAlert\Facades\Alert;




class PurchasesController extends Controller
{
    public function create(){
        $products = Products::where('deleted_at', null)
                            ->get(['id', 'name', 'stock']);

        $suppliers = Supplier::where('deleted_at', null)
                            ->get(['supplier_id', 'name', 'name_company']);
        return view('tailwind.add_purchase',["products" => $products, "suppliers" => $suppliers]);
    }
    public function store(Request $request) {

        $data = [ 
         "product_id" => $request->product_id,
         "supplier_id" => $request->supplier_id,
         "stock" => $request->stock,
         "comment" => $request->comment,
        ];
         
         $insertingData = Purchase::create($data);
         echo $insertingData;
         if ($insertingData) {
             $updateStock = Products::where('id', $data["product_id"])->first();
             $updatingStockInProduct = Products::where('id', $data["product_id"])
                                        ->update(['stock' => $updateStock->stock + $data["stock"]]);
             Alert::success('Berhasil', 'Pembelian berhasil ditambahkan');
        }
        return redirect('/products');
     }
    public function getAll() {
        // $purchases = Purchase::with([
        //     'products' ,
        //     'suppliers' 
        // ])->get(['stock','comment','created_at']);
        $purchases = Purchase::with([
                        'products:id,name,url_image,stock',
                        'suppliers:supplier_id,name,name_company,contact'
                    ]
        )->get(['purchase_id','stock','comment','created_at','product_id','supplier_id']);
       
        return view('tailwind.all_purchases',
            [
                "purchases" => $purchases
            ]
        );
    }
}
