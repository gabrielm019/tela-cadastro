<?php
$email2 = $_POST["email2"];
$senha2 = $_POST["senha2"];



include "conexao.php";

$sql_buscar_usuario = "select * from cadastro where email = '$email2' and senha = '" . md5($senha2) . "'";

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