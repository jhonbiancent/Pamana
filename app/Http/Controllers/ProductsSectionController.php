<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class ProductsSectionController extends Controller
{
    public function index()
    {
        $product_list = Products::orderBy('id', 'desc')->get();
        return view('products.sell', ["product_name" => $product_list]);
    }
    public function addNewProduct()
    {
        return view('products.add-new-product');
    }
}
