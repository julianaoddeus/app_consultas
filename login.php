<?php
$usuarioSistema = $_POST['usuario'];
$senhaSistema= $_POST['senha'];


include "includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_usuarios WHERE usuario = '{$usuarioSistema}' and senha = '{$senhaSistema}'";
$resultado = mysqli_query($conexao, $sqlBusca);

if(mysqli_num_rows($resultado) > 0){
    header('Location:agenda/agenda-listar.php');
}else{
    header('Location: index.php?mensagem==errado');
}

?>