<?php
  
  require_once '../app/database.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = new User;
  $user->username = $_POST['username'];
  $user->save();
  // redireciona para a página principal
  header('Location: login');
  exit;
  }
  
?>

<div class='container p-4'>
  <h1>Login</h1>

  <form id="user" method="POST" style='display: flex; gap: 1rem; flex-direction: column; width: fit-content'>
    <label class="form-label">Username:</label>
    <input class="form-control" type="text" name='username' id='username'>

    <input class='btn bg-dark text-light ' onclick="submitForm()" value='Cadastrar'>

    
  </form>
  
</div>






