<?php include "../includes/cabecalho.php";?>

<hr>

<p>
    <a href="pacientes-formulario-inserir.php" class="btn btn-danger bi-plus-circle">Novo paciente</a>
</p>

<?php
    include "../includes/conexao.php";

    $sqlBusca = "SELECT * FROM  tb_pacientes;";
    $resultado = mysqli_query($conexao, $sqlBusca);
    
?>

<table class="table table-hover">
<thead class="border">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">DATA NASCIMENTO</th>
      <th scope="col">CONVÊNIO</th>
      <th scope="col">AÇÕES</th>
      
    </tr>
  </thead>
    
<?php 
    while($row_paciente = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>{$row_paciente['id']}</td>";
        echo "<td>{$row_paciente['nome']}</td>";
        echo "<td>{$row_paciente['telefone']}</td>";
        //ALTERANDO FORMATO DE DATA PARA BRASILEIRO.
        $dataBrasil = date("d/m/Y", strtotime($row_paciente['dataNascimento']));
        echo "<td>{$dataBrasil}</td>";
        echo "<td>{$row_paciente['convenio']}</td>";       
        echo "<td><a href='pacientes-formulario-alterar.php?id_paciente={$row_paciente['id']}'>Alterar</a> | "; 
        echo "<a href='pacientes-excluir.php?id_paciente={$row_paciente['id']}'>Excluir</a></td>";
        echo "<tr>";
    }
?>

</table>
<?php include "../includes/rodape.php";?>