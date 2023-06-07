<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use PDF;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

        $order=Order::all();

        return view('admin.order.index',compact('order'));
    }

    public function updatestatus($id)
    {
        $order=Order::find($id);

        $order->atatus='delivered';

        $order->save();

        return redirect()->back();
    }
    
    public function print_pdf($id)
    {

        $order=order::find($id);

        $pdf=PDF::loadView('admin.order',compact('order'));

        return $pdf->download('order_details.pdf');
    }
}
