<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Purchase;


class Supplier extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "name",
        "name_company",
        "contact",
        "telp",
        "information",
    ];
    use HasFactory;
    protected $primaryKey =  'supplier_id';

    public function purchases()
    {
        return $this->hasMany(Purchase::class,'supplier_id', 'supplier_id');
    }
}
