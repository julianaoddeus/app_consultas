<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$dataNascimento = $_POST['dataNascimento'];
$convenio = $_POST['convenio'];
$diagnostico = $_POST['diagnostico'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes(nome, telefone, dataNascimento, convenio, diagnostico
) 
VALUES(
    '{$nome}' ,
    '{$telefone}' ,
    '{$dataNascimento}' , 
    '{$convenio}',
    '{$diagnostico}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Paciente inserido com sucesso!<br>";
    echo "<a href='pacientes-listar.php' >VOLTAR</a>";
}else{
    echo "Algum erro aconteceu";
}

?> 