<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdiupost extends Model
{
    protected $fillable = [
        'title','diucat_id','image','content','tag',
        'author','status'];

    public function diucat()
    {
        return $this->belongsTo(Diucat::class);
    }
}
