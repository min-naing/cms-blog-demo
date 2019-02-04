<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = ['id'];

    protected $upload = '/images/';

    protected $placeholder = 'https://via.placeholder.com/250?text=user';

    public function getFileAttribute($photo) {
        if( $photo )
            return $this->upload . $photo;
        else
            return $this->placeholder;
    }
}
