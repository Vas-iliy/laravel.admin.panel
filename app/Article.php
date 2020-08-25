<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;//реализуем мягкое удаление

    //protected $table = 'articles';
    //protected $primaryKey = 'id';

    //public $incrementing = false;
    //public $timestamps = false;
    protected $fillable = [
        'name',
        'text',
        'img',
        'created_at',
        'updated_at',
        'alias',
        'user_id'
    ];
    //реализуем мягкое удаление
    protected $dates = ['deleted_at'];

    public function user () {
        return $this->belongsTo('App\User');
    }

    //преобразование типов данных
    /*protected $casts = [
        'name' => 'boolean',
        'text' => 'array'
    ];*/

/*
    //метод читатель
    public function getNameAttribute ($value) {
        return 'Hi - ' . $value;
    }

    //метод преобразователь
    public function setNameAttribute ($value) {
        $this->attributes['name'] = $value . 'Тут был я';
    }*/
}
