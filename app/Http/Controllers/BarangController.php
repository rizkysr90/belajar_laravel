<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //
    public function index() {
        return view('semua-barang',
            [
                "semua_barang" => Barang::all()
            ]
        );
    }
    public function show($slug) {
        return view('barang',
            [
                "barang" => Barang::findOne($slug)
            ]
        );
    }
}
