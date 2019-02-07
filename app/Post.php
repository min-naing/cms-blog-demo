<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body'
    ];

    function user() {
        return $this->belongsTo('App\User');
    }

    function photo() {
        return $this->belongsTo('App\Photo');
    }

    function category() {
        return $this->belongsTo('App\Category');
    }
}
