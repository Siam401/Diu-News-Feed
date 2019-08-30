<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    public function viewer(){
        return $this->belongsTo(Viewer::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
