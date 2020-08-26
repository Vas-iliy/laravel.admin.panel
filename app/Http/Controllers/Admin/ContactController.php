<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /*protected $request

    public function __construct(Request $request) {
        $this->request = $request;
    }*/

    public function show (Request $request, $id = false) {
        /*if ($request->has('name')) {
            echo '<h1 style="margin-top: 100px">' . $request->input('name') . '<h1>';
        }*/
        /*print_r($request->only('name', 'site'));*/
        /*print_r($request->except('name', 'site'));*/
        /*echo '<h1 style="margin-top: 100px">' . $request->name . '<h1>';*/

        /*if ($request->is('contact')) {
            echo '<h1 style="margin-top: 100px">' . $request->path() . '</h1>';
        }*/

        /*echo '<h1 style="margin-top: 100px">' . $request->url() . '</h1>';*/
        /*echo '<h1 style="margin-top: 100px">' . $request->fullUrl() . '</h1>';*/

        /*echo '<h1 style="margin-top: 100px">' . $request->method() . '</h1>';*/

        //echo '<h1 style="margin-top: 100px">' . $request->root() . '</h1>';

        //гет параметры получаем
        //echo '<h1 style="margin-top: 100px">' . $request->query('option') . '</h1>';

        //print_r($request->server());

        //print_r($request->segments());



        /*if ($request->isMethod('POST')) {

            /////

            ///// validation

            /////

            //$request->flash(); сохранение данных в сессию
            return redirect()->route('contact')->withInput();

        }*/

        if ($request->isMethod('post')) {
            $rules = [
                'name'=> 'required|max:10',
                'email'=> 'required|email'
            ];
            $this->validate($request, $rules);

            dump($request->all());
        }

        $title = 'Contacts';
        return view('defoult.contact', compact('title'));
    }
}
