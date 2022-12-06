<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{
    public function create(){
        return view('tailwind.add_products');
    }
    public function store(Request $request) {
       $data = [ 
        "name" => $request->product_name,
        "description" => $request->description,
        "buy_price" => $request->buy_price,
        "sale_price" => $request->sale_price,
        "stock" => $request->stock,
        "url_image" => $request->url_image];
        
        $insertingData = Products::create($data);
        if ($insertingData) {
            Alert::success('Berhasil', 'Produk berhasil ditambahkan');
        }
        return redirect('/products');
    }
    public function destroy($id) {
        $deleteData = Products::where('id', $id)->delete();
        if ($deleteData) {
            Alert::success('Berhasil', 'Produk berhasil dihapus');
        }
        return redirect('/products');

    }
    public function edit($id) {
        $data = Products::where('id',$id)->get();

        return view('tailwind.edit_products',["data" => $data]);
    }
    public function getAll(){

        // dd($yourdata) untuk debugging
        return view('tailwind.all_products',
            [
                "products" => Products::all()
            ]
        );
    }
    public function simpan_get(){
        $data = [
            "name" => "Indomie Kari Ayam",
            "description" => "Indomie terkuat di bumi",
            "buy_price" => 1000,
            "sale_price" => 2000,
            "stock" => 50,
            "url_image" => "https://ik.imagekit.io/rizkysr90/1588837061.Indomie_Kari_Ayam_2_RcEmD5_T-.jpg"
        ];

        $insertingData = Products::create($data);
        if ($insertingData) {
            echo "Berhasil memasukkan data";
        }
    }
    public function hapus_get($id){
        $deletingData = Products::where('id', $id)->delete();
        if ($deletingData) {
            echo "Berhasil hapus data";
        }

    }
    public function update_get($id) {
        $data = [
            "name" => "Indomie Kari Ayam",
            "description" => "Indomie terkuat di bumi",
            "buy_price" => 99,
            "sale_price" => 9999,
            "stock" => 50,
            "url_image" => "https://ik.imagekit.io/rizkysr90/1588837061.Indomie_Kari_Ayam_2_RcEmD5_T-.jpg"
        ];
        $updatingData = Products::find($id)->update($data);
        if ($updatingData) {
            echo "Berhasil update data";
        }
    }
}
