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
    Editar espaço existente
    [<a href="index.php">Voltar</a>]
  </h2>

<?php

  $id = $_GET["id"];
  $descricao = $_GET["descricao"];

  if ($descricao != "") {

    include_once("connect.php");

    $result = mysqli_query($connection, "UPDATE espacos SET descricao = '$descricao' WHERE id = '$id' ");

    if ($result) {
      echo "<p>Espaço alterado com sucesso</p>";
    } else {
      echo "<p>Erro ao alterar um espaço</p>";
    }

  }

?>

  </table>  
</main>

<footer>
</footer>

</body>
</html>
