<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DifferentController extends Controller
{
    public function show () {
        $title = 'Different';
        if (view()->exists('defoult.different')) {
            $articles = DB::select('SELECT * FROM articles ');

            dump($articles);

            return response()->view('defoult.different', compact('title'));
        }
        abort(404);
    }

}
