<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diucat extends Model
{
    //
    protected $fillable = ['name', 'id'];

    public function diupost()
    {
        return $this->hasMany(Diupost::class);
    }
}
