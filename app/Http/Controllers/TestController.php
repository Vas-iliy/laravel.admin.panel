<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    protected function show ($id) {
        echo $id;
    }
}
