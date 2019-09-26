<?php

require_once "./tareasController/tareasController.php";

$partesURL = explode('/', $_GET['action']);
$controller = new tareasController();

if ($partesURL[0] == '') {
  $controller->home();
}else{
if ($partesURL[0] == 'insertarTarea') {
  $controller->insertarTarea();
}
elseif($partesURL[0] == 'montoTotal'){
  $controller->montoTotal();
}
}

 ?>
