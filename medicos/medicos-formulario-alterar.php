<?php include "../includes/cabecalho.php";?>


<?php include "../includes/conexao.php";

$id_medico = $_GET["id_medico"];

$sqlBusca = "SELECT * FROM tb_medicos WHERE id = {$id_medico};";
$listaDeMedicos = mysqli_query($conexao, $sqlBusca);

$nome = $telefone = $crm = $especialidade = "";

while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    $nome = $medico['nome'];
    $telefone = $medico['telefone'];
    $crm = $medico['crm'];
    $especialidade = $medico['especialidade'];
}
?>


<div class="container">
    <form name="formulario-alterar-medicos" method="POST" action="medicos-alterar.php">
            
           <div>
                <input type="hidden" name="id_medico" value="<?php echo $id_medico; ?>">
           </div>
            
            <div class="form-row d-flex pb-3 ">
                <div class="form-group col-md-3 p-2">
                    <label>NOME</label><input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>">
                </div>

                <div class="form-group col-md-3 p-2">
                    <label>TELEFONE</label><input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>">
                </div> 
                
                <br>
            </div> 

            <div class="form-row d-flex pb-3">  
                 <div class="form-group col-md-3 p-2">
                    <label>CRM</label><input type="text" class="form-control" id="crm"  name="crm" value="<?php echo $crm; ?>">
                </div>
                <div class="form-group col-md-3 p-2">
                    <label>ESPECIALIDADES</label>
                    <select class="form-control" name="especialidade">
                            <option selected>Escolha...</option>
                            <option value="Cardiologista" <?php if($especialidade == 'Cardiologista'){ echo 'selected'; } ?>>Cardiologista</option>
                            <option value="Nutricionista" <?php if($especialidade == 'Nutricionista'){ echo 'selected'; } ?>>Nutricionista</option>
                            <option value="Ortopedista"   <?php if($especialidade == 'Ortopedista'  ){ echo 'selected'; } ?>>Ortopedista</option>
                    </select>
                </div>

                
            </div>
            <button type="submit" class="btn btn-danger mt-3">Salvar</button>
            
    </form>

</div><br>






<?php include "../includes/rodape.php";?>