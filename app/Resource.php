<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'img_path',
        'title',
    ];

    public function territory() 
    {
        return $this->belongsTo('App\Territory');
    }

    public function resourceLinks() {
        return $this->hasMany('App\ResourceLink');
    }

}
