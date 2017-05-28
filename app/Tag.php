<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];

    public function posts()
    {
      return $this->BelongsToMany('App\Post', 'post_tag');
    }


}
