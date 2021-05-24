<?php
$id_agenda = $_POST['id_agenda'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_agenda(id_paciente, data_consulta, hora, id_medico, sala
) 
VALUES(
    '{$id_agenda' , 
    '{$data}' , 
    '{$hora}' , 
    '{$id_medico}', 
    '{$sala}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Agendamento inserido com sucesso!<br>";
    echo "<a href='agenda-listar.php' >VOLTAR</a>";
}else{
    echo "Algum erro aconteceu";
}

?> 