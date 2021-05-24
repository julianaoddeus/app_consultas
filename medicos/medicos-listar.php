<?php include "../includes/cabecalho.php";?>

<hr>

<p>
    <a href="medicos-formulario-inserir.php" class="btn btn-danger bi-plus-circle"><i class="bi bi-plus-circle"></i>Novo médico</a>
</p>

<?php
    include "../includes/conexao.php";

    $sqlBusca = "SELECT * FROM  tb_medicos;";
    $medicos = mysqli_query($conexao, $sqlBusca);
    
?>

<table class="table">
<thead class="border">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">CRM</th>
      <th scope="col">ESPECIALIDADE</th>
      <th scope="col">AÇÕES</th>
      
    </tr>
  </thead>
    
<?php 
    while($row_medico = mysqli_fetch_assoc($medicos)){
        echo "<tr>";
        echo "<td>{$row_medico['id']}</td>";
        echo "<td>{$row_medico['nome']}</td>";
        echo "<td>{$row_medico['telefone']}</td>";
        echo "<td>{$row_medico['crm']}</td>";
        echo "<td>{$row_medico['especialidade']}</td>";
        echo "<td><a class='btn btn-warning' href='medicos-formulario-alterar.php?id_medico={$row_medico['id']}'><i class='bi bi-pencil-square'></i></a>  "; 
        echo "<a class='btn btn-danger' href='medicos-excluir.php?id_medico={$row_medico['id']}'><i class='bi bi-x'></i></a></td>";
        echo "<tr>";
    }
?>

</table>
<?php include "../includes/rodape.php";?>