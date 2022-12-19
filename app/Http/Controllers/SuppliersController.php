<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use RealRashid\SweetAlert\Facades\Alert;


class SuppliersController extends Controller
{
    public function store(Request $request) {
        $data = [ 
         "name" => $request->name,
         "name_company" => $request->company_name,
         "contact" => $request->contact,
         "telp" =>  $request->telp,
         "information" => $request->information,
        ];
         
         $insertingData = Supplier::create($data);
         if ($insertingData) {
             Alert::success('Berhasil', 'Supplier berhasil ditambahkan');
         }
         return redirect('/products');
     }
     public function create() {
        return view('tailwind.add_suppliers');
     }

     public function index() {
        return view('tailwind.all_suppliers',
            [
                "suppliers" => Supplier::all()
            ]
        );
     }
}
