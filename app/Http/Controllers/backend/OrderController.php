<?php

namespace App\Http\Controllers\backend;
use App\Models\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
            return view('backend.order.list',compact('orders'));
        }
        public  function show($id){

            $order = Order::find($id);
            return view('backend.order.show', compact('order'));



    }

 public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();



        return redirect()
            ->route('order.index')
            ->withMessage('Successfully deleted');
    }


}
