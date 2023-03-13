<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

require_once '../app/database.php';

class Permission extends Eloquent {

  protected $table = 'permissions';

  public $timestamps = false;

  protected $fillable = [
    'username',
    'password',
    
  ];

  public function getPermission($username) {
    return Permission::where('username', $username)->get();
  }
}
// $permission = new Permission([
//     'username' => 'alice',
//     'password' => '12345',
//     'access_level' => 3
// ]);

// if (!$permission->save()) {
//  
//     echo $permission->getError();
// }