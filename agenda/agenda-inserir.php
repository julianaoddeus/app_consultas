<?php
$nome_paciente = $_POST['id_paciente'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$medico = $_POST['id_medico'];
$sala = $_POST['sala'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_agenda(id_paciente, data_consulta, hora, id_medico, sala
) 
VALUES(
    '{$nome_paciente}' , 
    '{$data}' , 
    '{$hora}' , 
    '{$nome_medico}', 
    '{$sala}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Agendamento inserido com sucesso!<br>";
    echo "<a href='medicos-listar.php' >VOLTAR</a>";
}else{
    echo "Algum erro aconteceu";
}

?> 