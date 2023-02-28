<?php

require_once '../app/init.php';

try {
  $app = new App;
} catch(Execption $e) {
  echo $e->getMessage();
}
