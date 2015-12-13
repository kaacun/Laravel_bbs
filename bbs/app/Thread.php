<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';
    protected $fillable = ['title', 'user', 'description'];

    public function comments(){
        return $this->hasMany('App\Comment', 'thread_id');
    }
}
