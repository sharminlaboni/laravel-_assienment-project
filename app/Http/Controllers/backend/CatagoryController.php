<?php

namespace App\Http\Controllers\backend;



use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;






class CatagoryController extends Controller
{

    public function catagorycreate()
    {



        return view('backend.catagory.create');
    }

    public function catagorystore(Request $request){

        $originalName = $request->file('image')->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;
        $request->file('image')->move(storage_path('/app/public/categories'), $fileName);



        Catagory::create([
            // coloum name of db || name of input field
            'name'=> $request->name,
            'image' => $fileName,




        ]);
        return redirect()
        ->route('catagories.index')
        ->withMessage('Successfully created');



    }

    public function index()
    {
        $catagories = Catagory::all();

        // return view('categories.index', [
        //     'categories' => $categories
        // ]);

        return view('backend.catagory.catagorylist', compact('catagories'));
    }

    public  function show($id){

                $catagory = Catagory::find($id);
                return view('backend.catagory.show', compact('catagory'));



    }
    public function edit($id){

        $catagory = Catagory::find($id);

        if ($catagory) {
        return view('backend.catagory.edit',compact('catagory'));
        } else {
            return redirect()->back();
        }

    }
    public function update(Request $request,$id){


        $originalName = $request->file('image')->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;
        $request->file('image')->move(storage_path('/app/public/categories'), $fileName);
        //  dd($request->all());
        $catagory = Catagory::find($id);

            $catagory->update([
                'name'=>$request->name,
                'image' => $fileName,
             ]);
            return redirect()
            ->route('catagories.index')
            ->withMessage('Successfully update');

            
        }



    public function destroy($id)
    {
        $catagory = Catagory::find($id);
        $catagory->delete();



        return redirect()
            ->route('catagories.index')
            ->withMessage('Successfully deleted');
    }

    public function downloadPdf()
    {
        $catagories = Catagory::all();
        $pdf = Pdf::loadView('backend.catagory.pdf', compact('catagories'));
        return $pdf->download('catagory-list.pdf');
    }


    public function trash()
    {
        $catagories = Catagory::onlyTrashed()->get();
        return view('backend.catagory.trash', compact('catagories'));
    }


    public function restore($id)
    {
        $catagory = Catagory::onlyTrashed()->find($id);
        $catagory->restore();

        return redirect()
            ->route('catagories.trash')
            ->withMessage('Successfully restored');
    }

    public function delete($id)
    {
        $catagory = Catagory::onlyTrashed()->find($id);
        $catagory->forceDelete();

        return redirect()
            ->route('catagories.trash')
            ->withMessage('Successfully deleted');
    }
}



