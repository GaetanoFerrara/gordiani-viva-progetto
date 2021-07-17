<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    protected $fillable = [
        'name',
        'img_path'
    ];

    public function resources()
    {
        return $this->hasMany('App\Resource');
    }
}
