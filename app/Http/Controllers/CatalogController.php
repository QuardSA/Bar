<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function Products(){
        $products = Product::paginate(9);
        return view('catalog', compact('products'));
    }
}