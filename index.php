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
    Espaços publicitários
    [<a href="novo_espaco.php">Novo</a>]
  </h2>

  <table>
    <tr>
      <th>
        <p>Id</p>
      </th>
      <th>
        <p>Descrição</p>
      </th>
      <th>
        <p>Alterar</p>
      </th>
      <th>
        <p>Excluir</p>
      </th>
    </tr>

<?php 

  include_once("connect.php");

  $result = mysqli_query($connection, "SELECT * FROM espacos");

while ($row = $result->fetch_array()) {
  $id = $row["id"];
  $descricao = $row["descricao"];

  echo 
    "<tr>" . 
      "<td>" . $id . "</td>" .
      "<td> <a href='detalhes_espaco.php?id=$id'>" . 
        $descricao . 
      "</td>" . 
      "<td> <a href='editar_espaco.php?id=$id'>Editar</a> </td>" .
      "<td> <a href='#' onclick='excluir($id)'>Excluir</a> </td>" . 
    "</tr>";
}

?>

  </table>  
</main>

<footer>
</footer>

</body>
</html>

<script>
  function excluir(id) {
    // alert(id);
    if (window.confirm('Você tem certeza que deseja excluir este espaço?')) {
      // alert(id);
      window.location = "excluir_espaco.php?id=" + id;
    }
    // alert('mensagem');
  }
</script>
