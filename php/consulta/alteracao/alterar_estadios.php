<?php
include("../../conexao/conexao.php");
$dado = $_GET['id'];
$consulta = "SELECT * FROM estadios WHERE estadio='$dado'";
if ($res = mysqli_query($conn, $consulta)) {
  while ($linha = mysqli_fetch_array($res)) {
    echo '
    <form id="form1" name="form1" method="post" action="update_estadios.php?id='.$dado.'">
    <table widht="300" height="380" border="10" align="center">
    <tr>
    <td colspan="2"> <div align="center" class="colunas"> Alterar Estádio </div> </td>
    </tr>
    <tr>
    <td><span class="altera">Nome do Estádio:</span></td>
    <td><label>
    <input name="estadio" type="text" id="estadio" value="'.$linha["estadio"].'"/>
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