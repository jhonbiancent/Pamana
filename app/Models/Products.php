<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['product_name', 'product_stocks', 'product_image', 'product_sold', 'product_price', 'product_sale_percent', 'product_sale_off', 'product_near', 'product_free_shipping'];
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
