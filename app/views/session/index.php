<?php 
  $myArrayFromCookie = unserialize($_COOKIE['myArrayCookie']);
?>


<h1>oi vc entrou na sessao <?php echo ($myArrayFromCookie['username']) ?> e <?php echo ($myArrayFromCookie['access_level'] )?>   </h1>
