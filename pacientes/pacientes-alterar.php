<?php
include "../includes/conexao.php";

$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$dataNascimento = $_POST['dataNascimento'];
$convenio  = $_POST['convenio'];
$diagnostico = $_POST['diagnostico'];


$sqlAlterar = "UPDATE tb_pacientes SET 
                    nome = '{$nome}', 
                    telefone = '{$telefone}', 
                    dataNascimento = '{$dataNascimento}', 
                    convenio = '{$convenio}' 
                    WHERE id = '{$id_paciente}'";

$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado){
    echo "Alterado com sucesso <br>";
    echo "<a href='pacientes-listar.php'>VOLTAR</a>";
}else{
    echo "Ocorreu algum erro.";
}
?>