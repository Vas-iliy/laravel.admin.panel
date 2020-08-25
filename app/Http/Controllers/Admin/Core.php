<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
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
                                                                    'img' => '1020',
                                                                    'user_id' => 1
                                                                ],
                                                                [
                                                                    'name' => 'TEST10100',
                                                                    'text' => 'lalala',
                                                                    'img' => '2020',
                                                                    'user_id' => 1
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

        //$articles = Article::all();

        //$articles = Article::where('id', '>', 7)->orderBy('id', 'desc')->take(2)->get();

        /*//поиск одного
        $article = Article::find(10);
        echo $article->text;
        //то же самое
        $article = Article::where('id', 10)->first();
        echo $article->text;*/
        //$articles = Article::find([1,2,10]);

        //$article = Article::findOrFail(100); найти это или исключение, страница 404
        //то же самое
        //$article = Article::where('id', 10)->firstOrFail();

        //Запись в таблицу
        /*$article = new Article();
        $user = User::find(1);

        $article->name = 'Какая-то хуетень';
        $article->text = 'Тоже хуетень';
        $article->img = 'хуетень';

        $user->articles()->save($article);

        $articles = Article::all();*/


        //dump($articles);
///////////////////////////////////////////////////////////////////////////////////////////////////////

        /////////////////////////////////////// 1:1
        //$user = User::find(1);

        //$country = Country::find(1);

        //dump($user->country);  dump($country->user);

        /////////////////////////////////////// 1:many
        /// тут обращаемся к свойствам
        /*$user = User::find(1);
        $articles = $user->articles;
        foreach ( $articles as $article ) {
            echo $article->name . '<br/>';
        }*/
        /// а тут к методам
        /*$user = User::find(1);
        $articles = $user->articles()->where('id', '>', 5)->get();
        dump($articles);*/

        /////////////////////////////////////// many:many
        /*$user = User::find(1);

        dump($user->roles);*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// это ленивая загрузка, так как сначала выполняется получение всех статей, а потом мы для каждый статьи ищем автора, то есть куча обращений к серверу и бд

        /*$articles = Article::all();

        foreach ($articles as $article) {
            echo $article->user->name;
        }

        dump($articles);*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// жадная загрузка

        /*$articles = Article::with('user')->get();//подгружаем данные из таблицы пользователей

        foreach ($articles as $article) {
            echo $article->user->name;
        }*/

        /*//другой способ
        $articles = Article::all();
        ///какой-то код

        /// какой-то код
        $articles->load('user');*/

        /*$users = User::with('articles', 'roles')->get();

        foreach ($users as $user) {
            dump($user->roles);
        }*/



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///метод has

        /*$users = User::has('articles', '>', 10)->get();//выбирает только пользователей, которые добавили статьи
        foreach ($users as $user) {
            dump($user->articles);
        }*/



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //$user = User::find(1);

        /*$article = new Article([
            'name' => 'New Article',
            'text' => 'Some text',
            'img' => 'img'
        ]);*/

        //$user->articles()->save($article);

        /*$user->articles()->create([
            'name' => 'New Article',
            'text' => 'Some text',
            'img' => 'img'
        ]);*/

        /*$user->articles()->saveMany([
            new Article([
                'name' => 'New Article1',
                'text' => 'Some text1',
                'img' => 'img'
            ]),
            new Article([
                'name' => 'New Article2',
                'text' => 'Some text2',
                'img' => 'img'
            ]),
            new Article([
                'name' => 'New Article3',
                'text' => 'Some text3',
                'img' => 'img'
            ]),
        ]);*/

        /*$articles = Article::all();
        dump($articles);*/

        /*$role = new Role(['name' => 'quest']);
        $user->roles()->save($role);*/

        /*$user->articles()->where('id', '=', '10')->update([
            'name' => 'New Text'
        ]);*/
    }

    /**
     * material
     *
     * @param $id
     */
    protected function getArticle ($id) {

    }
}
