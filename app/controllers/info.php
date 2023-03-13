<?php


class Info extends Controller {
  
  protected $user;

  public function __construct() {
    $this->user = $this->model('User');
  }

  public function index($name = '') {
    $user = $this->user;
    $user->name = $name;
    
    $this->view('info/index', ['name' => $user->name]);
    
  }

  public function form() {
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
      $this->user->username = $_POST['username'];
      $this->user->cidade = $_POST['cidade'];
      $this->user->estado = $_POST['estado'];
      $this->user->descricao = $_POST['descricao'];
      $this->user->nascimento = $_POST['nascimento'];


      $this->user->arquivo = $_FILES['arquivo'];
      $arquivo = $this->user->arquivo;


      $pasta= "../app/images/";
      $nomeDoArquivo = $arquivo['name'];
      $novoNomeDoArquivo = md5($nomeDoArquivo);
      $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
      
      $tmp_name= $arquivo['tmp_name'];
      $destino = $pasta . $novoNomeDoArquivo . '.' . $extensao;

      move_uploaded_file($tmp_name, $destino);
      
      $this->user->arquivo = $novoNomeDoArquivo . '.' . $extensao;    
      $this->user->save();
    } 
  }  
}
