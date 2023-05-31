<?php
include("../../conexao/conexao.php");

if (isset($_GET['id'])) {
  $dado = $_GET['id'];
  $exclusao = "DELETE FROM timesbr WHERE nome_time='$dado'";

  if (mysqli_query($conn, $exclusao)) {
    echo "<script>
      window.alert('Time Excluído com Sucesso.');
      location.href='../../menu.php';
    </script>";
  } else {
    echo "<script>
      window.alert('Erro na exclusão');
      location.href='../../menu.php';
    </script>";
  }
} else {
  echo "<script>
    window.alert('Parâmetro ID não encontrado.');
    location.href='../../menu.php';
  </script>";
}
?>
