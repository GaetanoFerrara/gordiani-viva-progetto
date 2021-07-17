<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceLink extends Model
{
    protected $fillable = [
        "link",
        "title"
    ];

    public function resource() {
        return $this->belongsTo('App\Resource');
    }
}
