<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        return view('detail-product',compact('product'));
    }
}
