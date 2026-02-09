<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['product_name', 'product_quantity'];
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;
}
