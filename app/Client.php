<?php

namespace App;

class Client extends BaseModel
{
    protected $fillable = [
        'name_sk',
        'name_de'
    ];

    public function getNameAttribute(){
        return $this->_translateProperty('name');
    }
}
