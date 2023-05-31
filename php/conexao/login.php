<?php

//As variáveis $l e $s são usadas para armazenar os valores enviados pelo formulário HTML através do método POST.
$l = $_POST['usuario'];
$s = $_POST['senha'];

include('conexao.php');

$sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?"; //A consulta SQL foi modificada para utilizar pontos de interrogação (?) como marcadores de posição para os parâmetros.

$stmt = mysqli_prepare($conn, $sql); //Foi criado um objeto de declaração preparada ($stmt) usando a função mysqli_prepare().

mysqli_stmt_bind_param($stmt, 'ss', $l, $s);//Os parâmetros ($l e $s) são vinculados à declaração preparada utilizando a função mysqli_stmt_bind_param(). O primeiro argumento 'ss' especifica os tipos de dados dos parâmetros (no caso, strings).

mysqli_stmt_execute($stmt);//A declaração preparada é executada utilizando a função mysqli_stmt_execute().

$resultado = mysqli_stmt_get_result($stmt);//O resultado da execução é obtido utilizando a função mysqli_stmt_get_result() para obter um objeto mysqli_result.

//Em seguida, é verificado se o número de linhas retornadas pelo resultado (mysqli_num_rows($resultado)) é maior que zero. Isso significa que a consulta encontrou registros correspondentes ao nome de usuário e senha fornecidos.
if (mysqli_num_rows($resultado) > 0) {
    session_start();//Se houver registros correspondentes, uma sessão é iniciada (session_start()).

    echo '
    <script>
        window.alert("Conectado!");
        location.href="../menu.php";
    </script>';

    $_SESSION['usuario'] = $l;
} 
//Se não houver registros correspondentes, uma mensagem de alerta é exibida informando que o usuário/senha está incorreto, e o usuário é redirecionado para a página "index.html" 
else {
    echo '
    <script>
        window.alert("Usuário ou senha incorretos");
        location.href="../index.html";
    </script>';
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>