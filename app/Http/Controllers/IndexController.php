<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show () {
        $title = 'Привет пидор';
        if (view()->exists('defoult.index')) {
            return view('defoult.index', compact('title'));
        }
    }
}
