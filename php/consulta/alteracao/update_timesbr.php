<?php
include("../../conexao/conexao.php");

$nome_time = $_POST['nome_time'];

$dado = $_GET['id'];

$alteracao = "UPDATE timesbr SET nome_time='$nome_time' WHERE nome_time='$dado'";

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