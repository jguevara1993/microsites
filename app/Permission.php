<?php

namespace App;

use Laratrust\LaratrustPermission;

class Permission extends LaratrustPermission
{

    protected $filliable = ['table_name'];

    public function roles()
    {
      return $this->BelongsToMany('App\Role', 'permission_role');
    }
}
