<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Sistema de controle de espaços publicitários - SEPUB - Detalhes de um espaço</title>
</head>

<header>
  <h1>Sistema de controle de espaços publicitários - SEPUB - Detalhes de um espaço</h1>
</header>

<main>
  <h2>
    Detalhes de um espaço 
    [<a href="index.php">Voltar</a>]
  </h2>

  <div class="div_main">

  <?php 

    $id = $_GET["id"];

    include_once("connect.php");

    $result = mysqli_query($connection, "SELECT * FROM espacos WHERE id = $id");

  while ($row = $result->fetch_array()) {
    echo 
        "<p>Id: " . $row["id"] . "</p>" .
        "<p>Descrição: " . $row["descricao"] . "</p>";
  }

  ?>

  </div>

</main>

<footer>
</footer>

</body>
</html>
