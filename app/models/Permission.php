<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

require_once '../app/database.php';

class Permission extends Eloquent {

  protected $table = 'permissions';

  protected $fillable = [
    'username',
    'password',
    'access_level'
  ];
}