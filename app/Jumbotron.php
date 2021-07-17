<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumbotron extends Model
{
    //

    protected $fillable = [
        'title',
        'subtitle',
        'link',
        'img_path'
    ];
}
