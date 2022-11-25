<?php



namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Dompdf\Css\Color as CssColor;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('backend.colors.index', compact('colors'));
    }

    public function create()
    {
        return view('backend.colors.create');
    }

    public function store(Request $request){



        Color::create([
            // coloum name of db || name of input field
            'title'=> $request->title,
            'color_code' => $request->color_code,




        ]);
        return redirect()
        ->route('colors.index')
        ->withMessage('Successfully created');



    }
    public function show($id)
    {
        $color = Color::find($id);
        return view('backend.colors.show', compact('color'));
    }

    public function edit($id){

        $color = Color::find($id);

        if ($color) {
        return view('backend.colors.edit',compact('color'));
        } else {
            return redirect()->back();
        }

    }
    public function update(Request $request,$id){



        $color= Color::find($id);

            $color->update([
            'title'=> $request->title,
            'color_code' => $request->color_code,


             ]);
            return redirect()
            ->route('colors.index')
            ->withMessage('Successfully update');
    }
            public function destroy($id)
            {
                $color = Color::find($id);
                $color->delete();



                return redirect()
                    ->route('colors.index')
                    ->withMessage('Successfully deleted');
            }

            public function downloadPdf()
            {
                $colors = Color::all();
                $pdf = Pdf::loadView('backend.colors.pdf', compact('colors'));
                return $pdf->download('color-list.pdf');
            }


            public function trash()
            {
                $colors = Color::onlyTrashed()->get();
                return view('backend.colors.trash', compact('colors'));
            }


            public function restore($id)
            {
                $catagory = Color::onlyTrashed()->find($id);
                $catagory->restore();

                return redirect()
                    ->route('colors.trash')
                    ->withMessage('Successfully restored');
            }

            public function delete($id)
            {
                $color = Color::onlyTrashed()->find($id);
                $color->forceDelete();

                return redirect()
                    ->route('colors.trash')
                    ->withMessage('Successfully deleted');
            }
        }






