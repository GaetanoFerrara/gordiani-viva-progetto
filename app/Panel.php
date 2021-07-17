<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    //
    protected $fillable = [
        'path_id',
        'title',
        'panel',
        'picture',
        'description',
        'gif',
    ];

    public function path()
    {
        return $this->belongsTo('App\Path');
    }
}
