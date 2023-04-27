<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class WelcomeController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('welcome',compact('products'));
    }
}
