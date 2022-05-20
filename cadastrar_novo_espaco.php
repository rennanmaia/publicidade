<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Sistema de controle de espaços publicitários - SEPUB</title>
</head>

<header>
  <h1>Sistema de controle de espaços publicitários - SEPUB</h1>
</header>

<main>
  <h2>
    Cadastrar novo espaço
    [<a href="index.php">Voltar</a>]
  </h2>

<?php

  $descricao = $_GET["descricao"];

  if ($descricao != "") {

    include_once("connect.php");

    $result = mysqli_query($connection, "INSERT INTO espacos (descricao) VALUES ('$descricao')");

    if ($result) {
      echo "<p>Espaço criado com sucesso</p>";
    } else {
      echo "<p>Erro ao criar um espaço</p>";
    }

  }

?>

  </table>  
</main>

<footer>
</footer>

</body>
</html>
