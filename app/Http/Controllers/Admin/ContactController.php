<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /*protected $request

    public function __construct(Request $request) {
        $this->request = $request;
    }*/

    public function store (ContactRequest $request, $id = false) {
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

        /*if ($request->isMethod('post')) {

            $rules = [
                //'name'=> 'after:tomorrow',//время более позднее
                //'name'=> 'alpha',//только алфовитные символы
                //'name'=> 'alpha_dash',//только алфовитные символы, цифры, _, -
                //'name'=> 'alpha_num',//только алфовитные символы, цифры
                //'name'=> 'before:date',//время более раннее
                //'name'=> 'between:2,5',//между этими значениями
                //'name'=> 'confirmed',//одно поле должно быть точно такое же как и другое "??_confirmation"
                //'name'=> 'different:email',//одно поле должно отличаться от другого
                //'name'=> 'exists:table',//проверяет, есть ли в таблице поле
                //'name'=> 'in:1,2,10|not_in:0,5',//значение это один из параметров
                //'name'=> 'integer',
                //'name'=> 'string',
                //'name'=> 'same:email',// поле должно быть точно такое же как и email
                //'name'=> 'unique:users,name',// поле должно быть уникальной в таблице и столбце
                //'email'=> 'required|email'
            ];
            $this->validate($request, $rules);
            dump($request->all());

        }*/

        $title = 'Contacts';
        return view('defoult.contact', compact('title'));
    }

    public function show () {
        $title = 'Contacts';
        return view('defoult.contact', compact('title'));
    }
}
