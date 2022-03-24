<?php

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $response = array("status"=>"POST REQUEST RECIEVED","data"=>$_POST);
    echo json_encode($response);
  }

  elseif($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    $response = array("status"=>"DELETE REQUEST RECIEVED","data"=>$_GET);
    echo json_encode($response);
  }

  elseif($_SERVER['REQUEST_METHOD'] === 'PUT'){
    parse_str(file_get_contents('php://input'), $_PUT);
    $response = array("status"=>"PUT REQUEST RECIEVED","DataFormQueryString"=>$_GET,"DataFromPostvars"=>$_PUT);
    echo json_encode($response);
  }
  
  elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
    $response = array("status"=>"GET REQUEST RECIEVED","data"=>$_GET);
    echo json_encode($response);
  }

  else{
    $response = array("status"=>"NO REQUEST RECIEVED");
    echo json_encode($response);
  }
?>