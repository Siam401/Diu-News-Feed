<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewer extends Model
{
    protected $fillable =
        [
            'viewer_name','email','password','viewer_no'
        ];
}
