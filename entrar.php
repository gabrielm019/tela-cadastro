<?php
$email = $_POST["email"];
$senha = $_POST["senha"];



include "conexao.php";

$sql_buscar_usuario = "select * from cadastro where email = '$email' and senha = '" . md5($senha) . "'";

$um_usuario = mysqli_query($conexao, $sql_buscar_usuario);

if ($um_usuario->num_rows > 0)
{
    header("location:hello.php");
}
else{
    header ("location:cad.php?msg=erro");
}


mysqli_close($conexao);

?>