<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image',
        'thumb'
    ];

    public function imageable(){
        return $this->morphTo('imageable');
    }

}
