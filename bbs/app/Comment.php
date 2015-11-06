<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    return $this->belongsTo('App\Thread'); // コメントはスレッドに対して付く
}
