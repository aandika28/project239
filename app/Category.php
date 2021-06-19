<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timesstamps = false;

    protected $fillable = [
        'name'
    ];
}
