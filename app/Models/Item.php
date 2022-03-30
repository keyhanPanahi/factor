<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['product_id','factor_id','total_prices','unit_price','amount'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
