<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Tag extends Model
{
    public function posts(){
      return $this->belongsToMany('App\Post');// second parametr intermidiare table, third parametr name of column tags(tag_id)fourth par foreign key (post_id).
    }

}
