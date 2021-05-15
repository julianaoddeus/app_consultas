<?php

//CONEXÃO COM O BANCO.

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_consultorio";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Falha na Conexão!". mysqli_connect_error());

?>