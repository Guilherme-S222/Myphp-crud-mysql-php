<?php
    
    include("../conexao/conexao.php");
    
    if($_POST['estadio']){
        $estadio = $_POST['estadio'];
        $consulta = "SELECT * FROM estadios WHERE estadio LIKE '%$estadio%'";
        $res = mysqli_query($conn, $consulta);
        if ($res){
            echo '<center><table width="1000" border="10">
            <tr>
            <td>Nome do Estádio</td>
            <td class="alterar">Alterar</td>
            <td class="excluir">Excluir</td>
            </tr>';
            while ($registros = mysqli_fetch_array($res))
            {
                echo'
                <tr>
                <td>'.$registros["estadio"].'</td>
                <td> <a href = ./alteracao/alterar_estadios.php?id='.$registros["estadio"].'><img src="../../img/alterar-flat.png" class="botoes"/></a></td>
                <td> <a href="./exclusao/excluir_estadios.php?id='.urlencode($registros["estadio"]).'"><img src="../../img/excluir-flat.png" class="botoes"/></a></td>
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
      <title>Resultado de pesquisa estádios</title>
      <link href="../../css/basic.css" rel="stylesheet">
      </head>
      <body></body>
</html>