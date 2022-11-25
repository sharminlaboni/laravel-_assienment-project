<?php

namespace App\Http\Controllers\frontend;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function frontend()
    {

            $product = Product::latest()->paginate(6);


        return view('frontend.index', compact('product'));
    }
    public function product_detail($id)
    {

        $product = Product::find($id);


        return view('frontend.product_detail',compact('product'));
    }
    public function cart ($id)
    {

        $product = Product::find($id);


        return view('frontend.cart',compact('product'));
    }

}
