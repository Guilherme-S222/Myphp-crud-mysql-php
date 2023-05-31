<?php
include("../../conexao/conexao.php");
$dado = $_GET['id'];
$consulta = "SELECT * FROM jogadores WHERE nome='$dado'";
if ($res = mysqli_query($conn, $consulta)) {
  while ($linha = mysqli_fetch_array($res)) {
    echo '
    <form id="form1" name="form1" method="post" action="update_jogadores.php?id='.$dado.'">
    <table widht="300" height="380" border="10" align="center">
    <tr>
    <td colspan="2"> <div align="center" class="colunas"> Alterar cadastro de jogador </div> </td>
    </tr>
    <tr>
    <td><span class="altera">Nome:</span></td>
    <td><label>
    <input name="nome" type="text" id="nome" value="'.$linha["nome"].'"/>
    </label></td>
    </tr>

    <tr>
    <td>&nbsp;</td>
    <td><label>
    <input name="Salvar" type="submit" id="Salvar" value="Salvar"/>
    </label></td>
    </tr>
    </table>
    </form>';
  }
} else {
  echo "Erro na consulta ao banco de dados: " . mysqli_error($conn);
}
?>