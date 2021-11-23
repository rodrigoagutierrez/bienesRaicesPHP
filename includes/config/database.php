<?php

function conectarDB() : mysqli {
  $db = mysqli_connect('localhost', 'root', '1234', 'raicesbienes');

  if(!$db) {
    echo "No se pudo conectar";
    exit;
  } 

  return $db;
}