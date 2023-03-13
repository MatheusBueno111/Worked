<?php


class Session extends Controller {
  
  protected $user;
  

  public function __construct() {
    $this->user = $this->model('Permission');
   
  }

  public function index($name = '') {
    $user = $this->user;
    $user->name = $name;  
    
    $this->view('session/index', ['name' => $user->name]);
  }

 

}