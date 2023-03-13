<?php 
  $myArrayFromCookie = unserialize($_COOKIE['myArrayCookie']);
?>

<div class='container p-4'>
  <h1>oi vc entrou na sessao <?php echo ($myArrayFromCookie['username']) ?> e <?php echo ($myArrayFromCookie['access_level'] )?>   </h1>
  <h1>Encontre o seu novo emprego ou estágio</h1>
  <p>É rápido e gratuito</p>
</div>



