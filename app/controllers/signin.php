<?php


class SignIn extends Controller {
  
  protected $user;
  

  public function __construct() {
    $this->user = $this->model('Permission');
   
  }

  public function index($name = '') {
    $user = $this->user;
    $user->name = $name;  
    
    $this->view('signin/index', ['name' => $user->name]);
  }

  public function checkSignIn(){


    session_start();

    $_SESSION = array();
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $this->user->getPermission($username);
    
    $this->view('signin/index', ['user' => $user]);
    
    
    if (count($user) > 0 && $password == $user[0]->password) {
      echo 'entrou na sessao';

      $_SESSION['username'] = $user[0]->username;
      $_SESSION['access_level'] = $user[0]->access_level;

      $serializedArray = serialize($_SESSION);
      setcookie('myArrayCookie', $serializedArray, time() + 24*60*60, '/');
      
      header('Location: ../session');
      exit();
    } else {
      echo 'sessao errada';
    }
  }
}



// $this->printJson(array('success'=>true, 'content'=>$user));