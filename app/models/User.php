<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{
 

  protected $fillable = ['username'];

  // private $username;

  public function setData($username){

    $user->username = $username;
    $user->save();
  
  }

}