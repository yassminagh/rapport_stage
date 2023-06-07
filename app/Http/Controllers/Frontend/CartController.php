<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CartController extends Controller
{
public function addToCart($id)
{
    
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    

    $product = Product::find($id);
    

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found');
    }
    
    $cart = new Cart();
    $cart->uname = Auth::user()->uname;
    $cart->email = Auth::user()->email;
    $cart->name = $product->name;
    $cart->quantity = $product->quantity;
    $cart->selling_price = $product->selling_price;
    $cart->save();
    
    return redirect()->back()->with('success', 'Product added to cart');
}
public function cart()
{
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    $user = auth()->user();
    $cart = Cart::where('uname', $user->uname)->get();
    $count = Cart::where('email', $user->email)->count();
    
    return view('frontend.cart', compact('count', 'cart'));
}

public function deletecart($id)
{
    $data=Cart::find($id);

    $data->delete();

    return redirect()->back()->with('message','Product Removed Successfully');
}

public function confirmOrder(Request $request)
{
    // Retrieve user information
    $user = auth()->user();
    $uname = $user->uname;
    $email = $user->email;

    // Retrieve cart data from the session
    $cartData= Cart::where('uname', $user->uname)->get();

    if ($cartData) {
        // Iterate over the cart items and save the order details
        foreach ($cartData as $item) {
            $order = new Order();
            $order->uname = $uname;
            $order->email = $email;
            $order->name = $item['name'];
            $order->selling_price = $item['selling_price'];
            $order->quantity = $item['quantity'];
            $order->atatus = 'not delivered';
            $order->save();
        }

        // Clear the cart data from the session
        $request->session()->forget('carts');

        return redirect()->back()->with('message', 'Order confirmed successfully.');
    } else {
        return redirect()->back()->with('error', 'No items in the cart.');
    }
}
}