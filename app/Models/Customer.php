<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_firstname', 'customer_lastname', 'customer_address', 'customer_number', 'customer_birth_date'];

    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
}
