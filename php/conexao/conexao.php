<?php

$host = "#";//ENDEREÇO DO SERVIDOR;
$usuario = "#";//NOME DO USUÁRIO;
$senha = "#";//SENHA;
$db = "#";//NOME DO BANCO DE DADOS;

$conn = mysqli_connect($host, $usuario, $senha, $db);//a função mysqli_connect() é usada para estabelecer a conexão com o banco de dados. 
if (!$conn) {
    die("Erro! Conexão não realizada: " . mysqli_connect_error());
}
//Se a conexão não for bem-sucedida, a função mysqli_connect_error() é chamada para obter uma descrição do erro. A instrução die() é utilizada para interromper a execução do script e exibir a mensagem de erro.

$stmt = mysqli_prepare($conn, "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
mysqli_stmt_bind_param($stmt, "ss", $l, $s);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
//Nesta parte do código, é realizada uma consulta ao banco de dados utilizando uma consulta preparada. A função mysqli_prepare() é usada para preparar a consulta SQL com placeholders (?) para os parâmetros. A função mysqli_stmt_bind_param() é utilizada para vincular os valores dos parâmetros ($l e $s) à declaração preparada. Neste caso, os tipos dos parâmetros são especificados como "ss" para indicar que são strings.
//Após vincular os parâmetros, a função mysqli_stmt_execute() é chamada para executar a consulta preparada. O resultado da consulta é armazenado na variável $resultado usando a função mysqli_stmt_get_result().

$banco = mysqli_select_db($conn, $db);////Nesta parte do código, é selecionado o banco de dados específico utilizando a função mysqli_select_db(). 

if (!$banco) {
    die("Erro! Não foi possível selecionar o banco de dados: " . mysqli_error($conn));
}
//Se a seleção do banco de dados falhar, a função mysqli_error() é usada para obter uma descrição do erro. Novamente, a instrução die() é usada para interromper a execução do script e exibir a mensagem de erro.

?>