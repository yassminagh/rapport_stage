<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Author;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{


    public function index()
    {
        $sliders = Slider::where('status','0')->get();

        $products = Product::where('status','0')->get();
        
        return view('frontend.index',compact('sliders','products'));
    }
    
    public function show($id)
    {
        // Retrieve the product data from the database based on the given $id
        $product = Product::find($id);
    
        // Pass the product data to the view
        return view('frontend.details', compact('product'));
    }

    


    public function redirect()
    {
        $role_as=Auth::user()->role_as;
        
        if($role_as=='1'){
            return view('admin.index');
        }
        else{
            $data = product::paginate(3);

            $user=auth()->user();

            $count=Cart::where('email',$user->email)->count();

            return view('frontend.index', compact('data','count','sliders','products'));
        }
    }

    public function indx()
    {
        
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else{

            $data = product::paginate(3);

            return view('frontend.index', compact('data'));
        }
        
    }
    public function search(Request $request)
    {
        $search=$request->search;

        if($search=='')
        {
            $data = Product::paginate(3);

            return view('frontend.index', compact('data'));
        }

        $data=Product::where('name','Like','%'.$search.'%')->get();

        return view('frontend.index',compact('data'));
    }
}
