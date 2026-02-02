<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = ['seller_name', 'seller_address', 'seller_contact', 'seller_shop_name'];
    /** @use HasFactory<\Database\Factories\SellerFactory> */
    use HasFactory;
    public function Products()
    {
        return $this->hasMany(Products::class);
    }
}
