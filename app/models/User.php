<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

require_once '../app/database.php';

class User extends Eloquent{
 
  protected $fillable = ['username'];

}