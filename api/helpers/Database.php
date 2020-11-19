<?php
  class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "root";
    private $database = "TODO_APP";

    private function getConnection() {
      return new mysqli($this->host, $this->user, $this->password, $this->database);
    }

    public function getData($query) {
      $db = $this->getConnection();
      $queryResult = $db->query($query);
      $result = [];
      while ($row = $queryResult->fetch_object()) {
        $result[] = $row;
      }
      return $result;
    }

    public function execQuery($query) {
      try {
        $db = $this->getConnection();
        $queryResult = $db->query($query);
        return true;
      } catch (\Throwable $th) {
        return false;
      }
    }
  }