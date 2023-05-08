<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $clientIP = request()->ip();
        // dd($clientIP);
        $cart = session()->get('cart');
        if($cart){
            $arr_id_cart = [];
            $arr_cart = [];
            foreach($cart as $id => $value){
                array_push($arr_id_cart , $id);
                array_push($arr_cart , $value);
            }
            // dd($arr_id_cart);
            // dd($arr_cart);
            for($i=0; $i<count($arr_id_cart); $i++){
                $get_cart = Cart::where('product_id', $arr_id_cart[$i])
                ->where('user_id', Auth::user()->id)
                ->first();
                if(!$get_cart){
                    $cart = new Cart();
                    $cart->product_id = $arr_id_cart[$i];
                    $cart->user_id = Auth::user()->id;
                    $cart->quantity = $arr_cart[$i]['quantity'];
                    $cart->user_ip = $clientIP;
                    $cart->save();
                }else{
                    // dd($arr_id_cart[$i]);
                    $cart = Cart::where('product_id', $arr_id_cart[$i])
                    ->where('user_id', Auth::user()->id)
                    ->first();
                    $cart->product_id = $arr_id_cart[$i];
                    $cart->user_id = Auth::user()->id;
                    $cart->quantity = $arr_cart[$i]['quantity'];
                    $cart->user_ip = $clientIP;
                    $cart->save();
                }
            }

        }
        return view('checkout');
    }
}
