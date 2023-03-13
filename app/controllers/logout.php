<?php

Class Logout extends Controller {
  public function logout() {
    session_start();

    // Remove todas as variáveis da sessão
    $_SESSION = array();

    
    setcookie('myArrayCookie', '', time() - 3600, '/');

    // Destroi a sessão
    session_destroy();

    header('Location: ../signin');
    exit();
}
}