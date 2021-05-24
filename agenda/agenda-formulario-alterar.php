<?php include "../includes/cabecalho.php";?>


<?php include "../includes/conexao.php";

$id_agenda = $_GET["id_agenda"];
$sqlBusca = "SELECT * FROM tb_agenda WHERE id = {$id_agenda};";
$listaAgenda = mysqli_query($conexao, $sqlBusca);

$data = $hora = $id_medico = $sala = $id_paciente = "";

while($agenda = mysqli_fetch_assoc($listaAgenda)){
    $data = $agenda['data_consulta'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
}
?>


<div class="container">
    <form name="cadastro-agenda" method="POST" action="agenda-alterar.php">
           
           <div>
                <input type="hidden" name="id_agenda" value="<?php echo $id_agenda; ?>">
           </div>
            
            <div class="form-row d-flex pb-3 ">
                <div class="form-group col-md-3 p-2">
                    <label>DATA</label><input type="date" class="form-control" name="data" value="<?php echo $data; ?>">
                </div>

                <div class="form-group col-md-3 p-2">
                    <label>HORA</label><input type="time" class="form-control"  name="hora" value="<?php echo $hora; ?>">
                </div>                 
               
            </div> 

            <div class="form-row d-flex pb-3">
            
                <div class="form-group col-md-3 p-2">
                     <label>MÉDICO</label>
                    <select class="form-control" name="id_medico"> 
                        <option value="">- -</option>
                        <?php                    
                        $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
                        $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

                        while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                            if($id_medico == $medico['id']){
                                echo "<option value='{$medico['id']}' selected>"; 
                            }else{
                                echo "<option value='{$medico['id']}'>"; 
                            }
                            
                            echo $medico['nome']; 
                            echo "</option>";
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group col-md-3 p-2">
                    <label>SALA</label><input type="text" class="form-control" name="sala" value="<?php echo $sala; ?>">
                </div>

            </div>
            <div class="form-row">               
                <div class="form-group col-md-6 p-2">
                <select class="form-control " name="id_paciente">
                        <option value="">- - </option>
                        <?php
                            $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
                            $listaDePacientes = mysqli_query($conexao, $sqlBuscaPacientes);

                            while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                               if($id_paciente == $paciente['id']){
                                    echo "<option value='{$paciente['id']}' selected>";
                               }else{
                                    echo "<option value='{$paciente['id']}'>";
                               }
                                echo $paciente['nome'];
                                echo "</option>";
                            }
                        
                        ?>
                    </select>
                </div>
            </div>
            

                
            </div>
            <button type="submit" class="btn btn-danger mt-3">Salvar</button>
            
    </form>

</div><br>






<?php include "../includes/rodape.php";?>