<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
            protected  $guarded = [];




    protected $hidden = [
        'password', 'remember_token',
    ];
}
