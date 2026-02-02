<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function index()
    {
        $product_list = Products::orderBy('created_at', 'desc')->get();
        return view('products.sell', ["product_name" => $product_list]);
    }
    public function find()
    {
        $product_list = Products::findOrFail(2);
        return view('products.sell', ["product_name" => $product_list]);
    }
}
