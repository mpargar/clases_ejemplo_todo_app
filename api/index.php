<?php
  include_once('./helpers/ResponseHelper.php');
  header('Content-Type: application/json');
  // Verificar si se recibe un controlador
  $responsHelper = new ResponseHelper();
  if(!isset($_GET['controller'])){
    $responsHelper->failResponse(400, "No se recibio un controlador.");
    die();
  }
  switch ($_GET['controller']) {
    case 'usuarios':
      include_once('./components/usuarios/usuariosApi.php');
      break;
    case 'tareas':
      # code...
      break;
    default:
      $responsHelper->failResponse(400, "El controlador ".$_GET['controller']." no existe.");
      break;
  }