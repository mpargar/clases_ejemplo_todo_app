<?php
class ResponseHelper{
  private $response = [];

  public function okResponse($code, $message, $data) {
    http_response_code($code);
    $this->response = [
      "code" => $code,
      "message" => $message,
      "data" => $data
    ];
    echo json_encode($this->response);
  }
  
  public function failResponse($code, $message) {
    http_response_code($code);
    $this->response = [
      "code" => $code,
      "message" => $message
    ];
    echo json_encode($this->response);
  }
}