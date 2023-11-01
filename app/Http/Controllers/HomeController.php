<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\user;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('login');
    }
    public function log(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
        
            return redirect()->route('userdashboard');
        }
        
        return back()->withErrors([
            'email'=>'the provided credentials do not match our records.'
        ]);
    }
public function userdashboard()
{
    return view('userdashboard');
}

public function product()
{
    $pro = Product::all();
  
    return view('product',compact('pro'));
}
public function view_cart()
{
    $cart = DB::table('carts')
    ->join('products', 'products.product_id', '=', 'carts.product_id')
    ->join('users', 'users.id', '=', 'carts.user_id')
    ->select('products.*')
    ->distinct()
    ->get();

    return view('cart',compact('cart'));
}
public function add_to_cart($id)
{
    $prod = Product::find($id);
    $prods = $prod->product_id;
 
    $user_id = Auth()->user()->id;
    Cart::create([
    'user_id' => $user_id,
    'product_id' => $prods,
]);
return redirect()->route('view.cart')->with('message',"product added to cart");
    
    
}
public function logout()
{
    Auth::logout();
    return redirect()->route('login');
}

}
