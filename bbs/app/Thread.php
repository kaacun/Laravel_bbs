<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';

    return $this->hasMany('App\Comment'); // 1スレッドに複数のコメントが付く
}
