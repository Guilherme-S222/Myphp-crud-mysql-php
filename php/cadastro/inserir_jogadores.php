<?php
include('../conexao/conexao.php');

// PREENCHER CAMPOS CONFORME O CADASTRO DO BANCO DE DADOS
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$posicao = $_POST['posicao'];

// Comando para inserir no banco de dados e na tabela correspondente
$sql = "INSERT INTO jogadores (nome, apelido, posicao) VALUES (?, ?, ?)";

// Preparar a declaração
$stmt = mysqli_prepare($conn, $sql);

// Verificar se a preparação da declaração ocorreu com sucesso
if ($stmt) {
    // Vincular os parâmetros
    mysqli_stmt_bind_param($stmt, 'sss', $nome, $apelido, $posicao);

    // Executar a declaração preparada
    if (mysqli_stmt_execute($stmt)) {
        echo '
        <script>
            window.alert("Jogador cadastrado com sucesso!");
            location.href = "../menu.php";
        </script>
        ';
    } else {
        echo '
        <script>
            window.alert("Erro na inserção!");
            // location.href = "./menu.php"; // Você pode redirecionar o usuário para outra página em caso de erro, se desejar.
        </script>
        ';
    }

    // Fechar a declaração
    mysqli_stmt_close($stmt);
} else {
    echo "Erro na preparação da declaração: " . mysqli_error($conn);
}

// Fechar a conexão
mysqli_close($conn);
?>
