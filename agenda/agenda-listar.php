<?php include "../includes/cabecalho.php"; include "../includes/conexao.php";?>

<hr>

<p>
    <a href="agenda-formulario-inserir.php" class="btn btn-danger bi-plus-circle">Agendamento</a>
</p>
<hr><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row">
    <div class="col-1">Médico:</div>
    <div class="col-3">
      <select name="id_medico" class="form-select">
        <option value="todos">TODOS</option>
        <?php
          $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
          $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

          while($medico = mysqli_fetch_array($listaDeMedicos)){
              echo "<option value='{$medico['id']}'>";
              echo $medico['nome'];
              echo "</option>";
          }
        ?>
        </select>        
    </div>
    <div class="col-4">
          <button class="btn btn-danger"><i class="bi bi-funnel" title="filtrar consultas"></i>BUSCAR</button>
    </div>
  </div>
</form>
<?php 


$sqlBusca = "SELECT 
                a.id, 
                a.data_consulta, 
                a.hora, 
                m.nome as 'nomeMedico', 
                a.sala, 
                p.nome as 'nomePaciente' 
            FROM tb_agenda a 
            INNER JOIN tb_pacientes p ON a.id_paciente = p.id 
            INNER JOIN tb_medicos m ON a.id_medico = m.id";

if(isset($_POST['id_medico'])){
  if($_POST['id_medico'] != 'todos'){ 
    $sqlBusca .= " WHERE a.id_medico = ". $_POST['id_medico'];
  }
}

$listaAgenda = mysqli_query($conexao, $sqlBusca);

?>

<br>
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
    while($agenda = mysqli_fetch_assoc($listaAgenda)){
        echo "<tr>";
        echo "<td>{$agenda['id']}</td>";

        $dataAgenda = date("d/m/Y", strtotime($agenda['data_consulta']));
        echo "<td>{$dataAgenda}</td>";

        echo "<td>{$agenda['hora']}</td>";
        echo "<td>{$agenda['nomeMedico']}</td>";
        echo "<td>{$agenda['sala']}</td>";
        echo "<td>{$agenda['nomePaciente']}</td>";
        echo "<td><a href='agenda-formulario-alterar.php?id={$agenda['id']}'>Alterar</a> | "; 
        echo "<a href='agenda-excluir.php?id_agenda={$agenda['id']}'>Excluir</a></td>";
        echo "<tr>";
    }

?>
</table>

<?php include "../includes/rodape.php";?>
