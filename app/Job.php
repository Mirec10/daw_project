<?php

namespace App;

class Job extends BaseModel
{
    protected $fillable = [
        'name_sk',
        'name_de',
        'description_sk',
        'description_de',
        'offer_sk',
        'offer_de',
        'requirements_sk',
        'requirements_de'
    ];

    public function getNameAttribute(){
        return $this->_translateProperty('name');
    }

    public function getDescriptionAttribute(){
        return $this->_translateProperty('description');
    }

    public function getOfferAttribute(){
        return $this->_translateProperty('offer');
    }

    public function getRequirementsAttribute(){
        return $this->_translateProperty('requirements');
    }
}
