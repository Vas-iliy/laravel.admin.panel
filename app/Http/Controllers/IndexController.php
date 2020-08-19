<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show () {
        $title = 'Привет пидор';
        return view('defoult.template', compact('title'));
    }
}
