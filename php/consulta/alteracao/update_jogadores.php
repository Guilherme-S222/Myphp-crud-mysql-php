<?php
include("../../conexao/conexao.php");

$nome = $_POST['nome'];

$dado = $_GET['id'];

$alteracao = "UPDATE jogadores SET nome='$nome' WHERE nome='$dado'";

if ($resultado = mysqli_query($conn, $alteracao))
{
  echo"<script>
  window.alert('Dados alterados com sucesso!');
    location.href='../../menu.php';
  </script>";
}

else{
  echo"<script>
  window.alert('Erro na alteração.');
    location.href='../../menu.php';
  </script>";
}
?>