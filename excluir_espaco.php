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
    Excluir espaço
    [<a href="index.php">Voltar</a>]
  </h2>

<?php

  $id = $_GET["id"];

  if ($id != "") {

    include_once("connect.php");

    $result = mysqli_query($connection, "DELETE FROM espacos WHERE id = '$id'");

    if ($result) {
      echo "<p>Espaço excluido com sucesso</p>";
    } else {
      echo "<p>Erro ao excluir um espaço</p>";
    }

  }

?>

  </table>  
</main>

<footer>
</footer>

</body>
</html>
