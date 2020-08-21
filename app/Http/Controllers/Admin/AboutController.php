<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

            $articles = DB::select('SELECT * FROM articles');

            dump($articles);

            return response()->view('defoult.index', compact('title'));
        }
    }

}
