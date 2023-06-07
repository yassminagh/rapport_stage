<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product;

    public function addToWishlist($product_id)
    {
        if(Auth::check())
        {
            if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$product_id)->exists())
            {
                session()->flash('message','Already Added to Wishlist');
                return false;
            }
            $wishlist = Wishlist::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product_id,
            ]);
            session()->flash('message','Wishlist Added successfully');
        }
        else
        {
            session()->flash('message','Please login to continue');
            return false;
        }
    }

    public function render()
    {
        return view('livewire.frontend.index');
    }
}
