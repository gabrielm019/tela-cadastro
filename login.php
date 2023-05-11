<?php
$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$celular = $_POST["celular"];


include "conexao.php";


$sql_buscar_usuario = "select * from cadastro where email = '$email' and senha = '" . md5($senha) . "'";

$um_usuario = mysqli_query($conexao, $sql_buscar_usuario); 


$sql_inserir_usuario = "insert INTO cadastro(email, senha, nome, sobrenome, cpf, celular) values('$nome','$email', '$cpf', '$celular', 
'$sobrenome', '" . md5($senha) . "')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);

?>