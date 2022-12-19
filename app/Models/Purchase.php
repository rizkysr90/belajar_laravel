<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Products;
use App\Models\Supplier;


class Purchase extends Model
{
    use SoftDeletes;
    // use HasFactory;
    protected $fillable = [
        "product_id",
        "supplier_id",
        "stock",
        "comment",
    ];
    protected $primaryKey =  'purchase_id';

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
    public function suppliers()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'supplier_id');
    }
}
