<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $filliable = ['PostTitle', 'post', 'slug', 'post_image'];

  public function categories()
  {
    return $this->BelongsToMany('App\Categories', 'category_post');
  }

  public function tags()
  {
    return $this->BelongsToMany('App\Tag', 'post_tag');
  }



}
