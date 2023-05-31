<?php
include("../../conexao/conexao.php");

$estadio = $_POST['estadio'];

$dado = $_GET['id'];

$alteracao = "UPDATE estadios SET estadio='$estadio' WHERE estadio='$dado'";

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