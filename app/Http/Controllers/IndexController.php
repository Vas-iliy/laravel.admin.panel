<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show () {
        /*$array = array(
            'title'=>'Laravel Project',
            'data' =>[
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5'
            ],
            'dataI' =>['List 1','List 2','List 3','List 4','List 5'],

            'bvar' => true,
            'script' =>"<script>alert('hello')</script>"
        );*/
        $title = 'Laravel Project';
        if (view()->exists('defoult.index')) {
            return view('defoult.index', compact('title'));
        }
    }
}
