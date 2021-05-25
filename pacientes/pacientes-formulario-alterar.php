<?php include "../includes/cabecalho.php";
 include "../includes/conexao.php";

$id_paciente = $_GET["id_paciente"];

$sqlBusca = "SELECT * FROM tb_pacientes WHERE id = {$id_paciente};";

$listaDePacientes = mysqli_query($conexao, $sqlBusca);

$nome = $telefone = $dataNascimento = $convenio = $diagnostico = "";

while ($row = mysqli_fetch_assoc($listaDePacientes)){
    $nome = $row['nome'];
    $telefone = $row['telefone'];
    $dataNascimento = $row['dataNascimento'];
    $convenio = $row['convenio'];
    $diagnostico = $row['diagnostico'];
}

?>
<div class="container">
    <form name="formulario-inserir-pacientes" method="post" action="pacientes-alterar.php">
            <br>
            <input type="hidden" name="id_paciente" value="<?php echo $id_paciente;?>">
            
            <div class="form-row d-flex pb-3 ">
                <div class="form-group col-md-3 p-2">
                    <label>NOME</label><input class="form-control" name="nome" value="<?php echo $nome;?>">
                </div>

                <div class="form-group col-md-3 p-2">
                    <label>TELEFONE</label><input class="form-control" name="telefone" value="<?php echo $telefone;?>">
                </div> 
               
            </div> 

            <div class="form-row  pb-3">
                <div class="form-group col-md-3 p-2">
                    <label>DATA DE NASCIMENTO</label>
                    <input type="date" class="form-control"  name="dataNascimento" value="<?php echo $dataNascimento;?>">
                </div>

                <div class="form-group col-md-3 p-2">
                   <label>CONVÊNIO</label> 
                   <?php
                    $marcado = "";
                    if($convenio == "sim"){
                        $marcado = "checked";
                    }else{
                        $marcado = "não";
                    }
                   ?>
                   <input type="checkbox"  name="convenio" value=" <?php echo $marcado;?>"> 
                </div>  
                
                 <div class="form-group col-md-3 p-2 "> 
                    <label>DIAGNÓSTIVO</label>
                    <textarea class="form-control" name="diagnostico" ><?php echo $diagnostico;?></textarea>
                </div>              
            </div>
           
            <button type="submit" class="btn btn-danger mt-3">Salvar</button>
            
    </form>

</div><br>






<?php include "../includes/rodape.php";?>