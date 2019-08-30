<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
   protected $fillable = [
        'title','cat_id','image','content','tag',
        'author','status'];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
   // public function post()
   // {
     //   return $this->belongsTo('App\Post');
    //}
}
