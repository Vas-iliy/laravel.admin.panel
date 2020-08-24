<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = 'articles';
    //protected $primaryKey = 'id';

    //public $incrementing = false;
    //public $timestamps = false;

    public function user () {
        return $this->belongsTo('App\User');
    }
}
