<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = ['email', 'password', 'first_name', 'contact', 'last_name', 'birth_date', 'address'];
    /** @use HasFactory<\Database\Factories\AccountsFactory> */
    use HasFactory;
}
