<?php

namespace App\Models;



class Barang
{
    private static $barang = [
        [
            "title" => "Indomie Kecil 250gr",
            "slug" => "indomie-kecil-250gr",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, veritatis!"
        ],
        [
            "title" => "Indomie Besar 500gr",
            "slug" => "indomie-besar-500gr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint sed reiciendis "
        ],
    ];

    public static function all() {
        return collect(self::$barang);   
    }

    public static function findOne($slug) {
        $getAllData = self::all();
        return $getAllData->firstWhere('slug', $slug);
    }
}