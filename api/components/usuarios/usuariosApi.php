<?php
  /**
   * Metodos:
   * Registro
   * Editar
   * Eliminar
   * Login
   * Logout
   */
  include_once('./components/usuarios/UsuarioController.php');
  if(!isset($_GET['method'])){
    $responsHelper->failResponse(400, "No se recibio un metodo para el controlador usuarios.");
    die();
  }
  $usuarioController = new UsuarioController();
  switch ($_GET['method']) {
    case 'registro':
      $usuarioController->create();
      break;
    case 'editar':
      $usuarioController->update();
      break;
    case 'eliminar':
      $usuarioController->delete();
      break;
    case 'login':
      $usuarioController->login();
      break;
    case 'logout':
      $usuarioController->logout();
      break;
    default:
      $responsHelper->failResponse(400, "El metodo ".$_GET['method']." no existe en el controlador usuario.");
      break;
  }