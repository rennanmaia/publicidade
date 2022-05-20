<?php 

$server = "localhost";
$port = "3306";
$user = "root";
$pass = "";
$db = "publicidade";

$connection = mysqli_connect($server, $user, $pass, $db, $port);


if ($connection->connect_errno) {
  echo "Falha ao conectar ao MySQL: (" . $mysqli->connct_errno . ") " . $mysqli->connect_errno;
}

mysqli_set_charset($connection, "utf8");
