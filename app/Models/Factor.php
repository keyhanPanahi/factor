<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factor extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['date','subject','customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class,'factor_id');
    }


}
