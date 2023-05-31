<?php
    
    include("../conexao/conexao.php");
    
    if($_POST['nome_time']){
        $nome_time = $_POST['nome_time'];
        $consulta = "SELECT * FROM timesbr WHERE nome_time LIKE '%$nome_time%'";
        $res = mysqli_query($conn, $consulta);
        if ($res){
            echo '<center><table width="1000" border="10">
            <tr>
            <td>Nome do Time</td>
            <td class="alterar">Alterar</td>
            <td class="excluir">Excluir</td>
            </tr>';
            while ($registros = mysqli_fetch_array($res))
            {
                echo'
                <tr>
                <td>'.$registros["nome_time"].'</td>
                <td> <a href = ./alteracao/alterar_timesbr.php?id='.$registros["nome_time"].'><img src="../../img/alterar-flat.png" class="botoes"/></a></td>
                <td> <a href="./exclusao/excluir_timesbr.php?id='.urlencode($registros["nome_time"]).'"><img src="../../img/excluir-flat.png" class="botoes"/></a></td>
                </tr>';
            }
            echo '</table></center>';
        } 
        else {
            echo "Erro na consulta ao banco de dados.";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
      <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Resultado de pesquisa times</title>
      <link href="../../css/basic.css" rel="stylesheet">
      </head>
      <body></body>
</html>