<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show () {
        $title = 'Привет пидор';
        if (view()->exists('defoult.about')) {
            return view('defoult.about', compact('title'));
        }
    }

}
