<?php

  $dbHost = "localhost";
  $dbUsername = "root";
  $dbPassword = "111";
  $dbDatabase = "formulario";
  $dbPort = "3310";

  $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase, $dbPort);
  if ($conn->connect_error) {
      die("Erro de conexão!, try again " . $conn->connect_error);
  }else {
    echo "conectado com sucesso!!";
  };

?>