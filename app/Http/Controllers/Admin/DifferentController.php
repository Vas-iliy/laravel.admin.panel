<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DifferentController extends Controller
{
    public function show () {
        if (view()->exists('defoult.different')) {

            /*//DB::insert("INSERT INTO articles (`name`, `text`, `img`) VALUES (?, ?, ?)", ['test 1', 'text', 'img']);

            //$result = DB::connection()->getPdo()->lastInsertId();

            //$result = DB::update("UPDATE articles SET `name` = ? WHERE `id` = ?", ['TEST X', 5]);

            //DB::delete("DELETE FROM articles WHERE `id` = ?", [5]);

            //DB::statement('DROP table articles');
            //$articles = DB::select('SELECT * FROM articles ');

            //dump($result);
            //dump($articles);*/

            $page = DB::select('SELECT * FROM page WHERE id = ?', [1]);
            dump($page);

            return response()->view('defoult.different', compact('page'));
        }
        abort(404);
    }

}
