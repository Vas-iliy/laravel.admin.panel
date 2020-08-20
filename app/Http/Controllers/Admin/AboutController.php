<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Resource_;

class AboutController extends Controller
{
    public function show () {
        $title = 'Hi';
        if (view()->exists('defoult.about')) {

            //$view = view('defoult.about', compact('title'));
            /*return (new Response($view))->header('Content-Type', 'New Type');*/

            //return response()->json(['name' => 'Hello']);

            //return response()->view('defoult.about', compact('title'));

            //return response()->download('robots.txt', 'nax.txt');


            return view('defoult.about', compact('title'));
        }
        abort(404);
    }

}
