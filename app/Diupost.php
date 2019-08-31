<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diupost extends Model
{
    protected $fillable = [
        'title','diucat_id','content','tag',
        'author','status','image'];

    public function diucat()
    {
        return $this->belongsTo(Diucat::class);
    }
}
