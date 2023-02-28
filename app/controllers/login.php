<?php

require_once '../app/models/User.php';

class Login extends Controller {
  
  protected $user;
  // private $infoUser;

  public function __construct() {
    $this->user = $this->model('User');
  }

  public function index($name = '') {
    $user = $this->user;
    $user->name = $name;
    
    $this->view('login/index', ['name' => $user->name]);
    echo $name;
  }

  public function form() {
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
      $this->user->username = $_POST['username'];
      $this->user->save();
      
      echo "Dados salvos com sucesso!";
    }
  }
}