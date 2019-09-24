<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image',
        'thumb',
        'profile'
    ];

    public function imageable(){
        return $this->morphTo('imageable');
    }

}
