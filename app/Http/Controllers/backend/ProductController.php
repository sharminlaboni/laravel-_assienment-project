<?php

namespace App\Http\Controllers\backend;
use App\Models\Product;
use App\Models\Color;

use App\Models\Catagory;
use App\Http\Controllers\Controller;
use Image;


use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create()
    {


        $catagory=Catagory::pluck('name','id')->toArray();
        $colors = Color::pluck('title', 'id')->toArray();


        return view('backend.product.create', compact('catagory','colors'));
    }

    public function store(Request $request){

        //dd($request->all());
        $requestData =[
            // coloum name of db || name of input field
            'title'=> $request->title,
            'catagory_id'=>$request->catagory_id,
            'is_active'=>$request->is_active ? true : false ,
            'description'=> $request->description,
            'color_id' => $request->colors,
            'image' => $this->uploadImage($request->file('image')),
            'price' => $request->price,

        ];
        $product = Product::create($requestData);

        $product->color()->attach($request->colors);


        return redirect()
                ->route('product.index')
                ->withMessage('Successfully created');
    }

    public function index()
    {
        $products = Product::latest()->paginate(15);


        return view('backend.product.list', compact('products'));
    }

    public  function show($id){

                $product = Product::find($id);
                return view('backend.product.show', compact('product'));



    }
    public function edit($id){

        $catagory=Catagory::pluck('name','id')->toArray();
        $colors = Color::pluck('title', 'id')->toArray();



        $product = Product::find($id);

        if ($product) {
        return view('backend.product.edit',compact('product','catagory','colors'));
        } else {
            return redirect()->back();
        }

    }
    public function update(Request $request, $id){
        //dd($request->all());
        //$catagory=Catagory::pluck('name','id')->toArray();

        $product = Product::find($id);
        //dd($request->all());
        $requestData=[

           'title'=> $request->title,
            'catagory_id'=>$request->catagory_id,

            'is_active'=>$request->is_active ? true : false ,
            'description'=> $request->description,
            'image' => $this->uploadImage($request->file('image')),
            'price' => $request->price,


         ];

    $product->update($requestData);
        $product->color()->sync($request->colors);


         //$product->update($requestData);
         return redirect()
            ->route('product.index')
            ->withMessage('Successfully update');

    }




    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();



        return redirect()
            ->route('product.index')
            ->withMessage('Successfully deleted');
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('backend.product.trash', compact('products'));
    }

    public function restore($id)
    {
        $products = Product::onlyTrashed()->find($id);
        $products->restore();

        return redirect()
            ->route('product.trash')
            ->withMessage('Successfully restored');
    }

    public function delete($id)
    {
        $products = Product::onlyTrashed()->find($id);
        $products->forceDelete();

        return redirect()
            ->route('product.trash')
            ->withMessage('Successfully deleted');
    }

    public function uploadImage($image)
    {
        $originalName = $image->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;

        $image->move(storage_path('/app/public/products'), $fileName);

        //Image::make($image)
             //->resize(200, 200)
            //->save(storage_path() . '/app/public/products/' . $fileName);
        return $fileName;
    }
}


