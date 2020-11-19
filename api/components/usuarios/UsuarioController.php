<?php
  include_once('helpers/Database.php');
  class UsuarioController{
    private $responseHelper;
    private $database;

    public function __construct(){
      $this->responseHelper = new ResponseHelper();
      $this->database = new Database();
    }

    public function create() {
      var_dump($_POST);
      if(
        isset($_POST['name']) &&
        isset($_POST['lastname']) && 
        isset($_POST['birthday']) && 
        isset($_POST['email']) &&
        isset($_POST['password'])
      ){
        $query = "SELECT * FROM Usuarios WHERE email = '".$_POST['email']."'";
        echo($query);
        $verifyUsers = $this->database->execQuery($query);
        var_dump($verifyUsers);
      } else {
        echo("crayola");
      }
    }
    public function update() {
    }
    public function delete() {
    }
    public function login() {
    }
    public function logout() {
    }
  }