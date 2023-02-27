<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{
 

  protected $fillable = ['username'];

  // private $username;

  public function setData($username){

    require_once '../app/database.php';

    $user->username = $username;
    $user->save();
  
  }

}