<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Purchase;


class Products extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "name",
        "description",
        "buy_price",
        "sale_price",
        "status",
        "stock",
        "url_image"
    ];
    // digunakan saat nama primary key selain id
    // protected $primaryKey =  'yourprimarykeyfield';
    public static function findById($id) {
        
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'product_id', 'id');
    }
}
