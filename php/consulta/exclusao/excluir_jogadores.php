<?php
include("../../conexao/conexao.php");

if (isset($_GET['id'])) {
  $dado = $_GET['id'];
  $exclusao = "DELETE FROM jogadores WHERE nome='$dado'";

  if (mysqli_query($conn, $exclusao)) {
    echo "<script>
      window.alert('Jogador Excluído com Sucesso.');
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
