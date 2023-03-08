<?php

require_once '../app/models/Permission.php';

class Signup extends Controller {
  
  protected $permission;

  public function __construct() {
    $this->permission = $this->model('Permission');
  }

  public function index($name = '') {
    $permission = $this->permission;
    $permission->name = $name;
    
    $this->view('signup/index', ['name' => $permission->name]);
  }

  public function formpermission() {
    echo 'opa';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $this->permission->username = $_POST['username'];
      $this->permission->password = $_POST['password'];
     
      $this->permission->save();
    } 
  }  

}