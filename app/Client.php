<?php

namespace App;

class Client extends BaseModel
{
    protected $fillable = [
        'name_sk',
        'name_de'
    ];

    public function images(){
        return $this->morphMany('App\Image','imageable');
    }

    public function getNameAttribute(){
        return $this->_translateProperty('name');
    }

    public function getProfileImageAttribute(){
        $path = 'data/clients/' . $this->id . '/';

        if($this->images->where('profile', 1)->count() > 0){
            return $path . $this->images()->where('profile', 1)->first()->image;
        }else{
            return false;
        }
    }

    public function getProfileThumbAttribute(){
        $path = 'data/clients/' . $this->id . '/';

        if($this->images->where('profile', 1)->count() > 0){
            return $path . $this->images()->where('profile', 1)->first()->thumb;
        }else{
            return false;
        }
    }
}
