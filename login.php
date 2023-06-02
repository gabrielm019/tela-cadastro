<?php

include "conexao.php";
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$celular = $_POST["celular"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];









$sql_buscar_usuario = "select * from cadastro where email = '$email' and senha = '" . md5($senha) . "'";

$um_usuario = mysqli_query($conexao, $sql_buscar_usuario);


$sql_inserir_usuario = "insert INTO cadastro(nome, email, cpf, celular, sobrenome, senha) values('$nome','$email', '$cpf', '$celular', '$sobrenome','" . md5($senha) . "')";


$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);

?>