<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $filliable = ['theme_name', 'slug', 'meta_data'];
}
