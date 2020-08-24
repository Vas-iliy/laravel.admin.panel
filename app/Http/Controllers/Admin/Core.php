<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Core extends Controller
{

    /**
     * list materials
     */
    protected function getArticles () {

        //вся информация
        //$articles = DB::table('articles')->get();

        //первая запись
        //$articles = DB::table('articles')->first();

        //информация по полю
        //$articles = DB::table('articles')->value('name');

        //все записи по полю
        //$articles = DB::table('articles')->pluck('name');

        //кол-во записай таблицы
        //$articles = DB::table('articles')->count();

        //максимальное значение
        //$articles = DB::table('articles')->max('id');

        //выбираем по полям
        //$articles = DB::table('articles')->select('name', 'id', 'text')->get();

        //уникальные значения
        //$articles = DB::table('articles')->distinct()->select('name')->get();

        //добавление полей
        //$query = DB::table('articles')->select('name');
        //////////////////////////////////////////////////////////////////kod
        //$articles = $query->addSelect('text')->get();

        //WHERE
        //$articles = DB::table('articles')->select('text')->where('id', '<=', '2')->get();


        /*$articles = DB::table('articles')->select('text', 'name')
                                         ->where('id', '>', '4')
                                         ->where('name', 'like', 'test%', 'or')
                                         ->get();*/
        //между элементами
        //$articles = DB::table('articles')->whereBetween('id', [1, 3])->get();

        //количество записей из БД с пропуском
        //$articles = DB::table('articles')->take(3)->skip(2)->get();


        /*DB::table('articles')->insert(
                                                            [
                                                                [
                                                                    'name' => 'TEST',
                                                                    'text' => 'lalala',
                                                                    'img' => '1020'
                                                                ],
                                                                [
                                                                    'name' => 'TEST10100',
                                                                    'text' => 'lalala',
                                                                    'img' => '2020'
                                                                ]
                                                            ]
                                                        );*/

        /*$result = DB::table('articles')->insertGetId(
                [
                    'name' => 'TEST',
                    'text' => 'lalala',
                    'img' => '1020'
                ]
        );*/

        //DB::table('articles')->where('id',  '=', 2)->update(['name' => 'Hi']);

        //$result = DB::table('articles')->where('id', '>', 10)->delete();

        //dump($result);





///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////// ТУТ ДЛЯ МОДЕЛИ. ВСЕ ЧТО БЫЛО В КОНСТРУКТОРЕ ЗАПРОСОВ ТУТ ТОЖЕ ДЕЙСТВУЕТ.
        //$articles = Article::where('id', '>', 3)->get();

        /*foreach ($articles as $article) {
            echo $article->text . '<br/>';
        };*/


        //dump($articles);
///////////////////////////////////////////////////////////////////////////////////////////////////////


    }

    /**
     * material
     *
     * @param $id
     */
    protected function getArticle ($id) {

    }
}
