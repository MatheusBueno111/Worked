<?php

class Login extends Controller {
  
  protected $user;

  public function __construct() {
    $this->user = $this->model('User');
  }

  public function index($name = '') {
    $user = $this->user;
    $user->name = $name;
    
    $this->view('login/index', ['name' => $user->name]);
  }

  public function saveData() {
    require_once '../app/models/User.php';

    $model = new User();
    
    $this->infoUser = $model->setData($name, $email);
   
  }
}