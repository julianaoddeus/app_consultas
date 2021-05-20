<?php include "../includes/cabecalho.php";?>

<hr>

<p>
    <a href="agenda-formulario-inserir.php" class="btn btn-danger bi-plus-circle">Agendamento</a>
</p>
<?php 
include "../includes/conexao.php";

$sqlBusca = "SELECT 
                a.id, 
                a.data, 
                a.hora, 
                m.nome as 'NomeMedico', 
                a.sala, 
                p.nome as 'NomePaciente' 
            FROM tb_agenda a 
            INNER JOIN tb_pacientes p ON a.id_paciente = p.id 
            INNER JOIN tb_medicos m ON a.id_medico = m.id";

$ListaDeAgenda = mysqli_query($conexao, $sqlBusca);

?>


<table class="table">
<thead class="border">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DATA</th>
      <th scope="col">HORÁRIO</th>
      <th scope="col">MÉDICO</th>
      <th scope="col">SALA</th>
      <th scope="col">PACIENTE</th>
      <th scope="col">AÇÕES</th>
      
    </tr>
  </thead>
<?php
    while($row_agenda = mysqli_fetch_assoc($ListaDeAgenda)){
        echo "<tr>";
        echo "<td>{$row_agenda['id']}</td>";

        $dataCorrigida = date("d/m/Y", strtotime($row_agenda['data']));
        echo "<td>{$dataCorrigida}</td>";

        echo "<td>{$row_agenda['hora']}</td>";
        echo "<td>{$row_agenda['NomeMedico']}</td>";
        echo "<td>{$row_agenda['sala']}</td>";
        echo "<td>{$row_agenda['NomePaciente']}</td>";
        echo "<td><a href='agenda-formulario-alterar.php?id={$row_agenda['id']}'>Alterar</a> | "; 
        echo "<a href='agenda-excluir.php?id_medico={$row_agenda['id']}'>Excluir</a></td>";
        echo "<tr>";
    }

?>
</table>

<?php include "../includes/rodape.php";?>
