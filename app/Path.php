<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $fillable = [
        'resource_id',
        'name',
        'description',
        'logo',
    ];

    public function panels()
    {
        return $this->hasMany('App\Panel');
    }
}
