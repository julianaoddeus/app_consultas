<?php 
include "../includes/cabecalho.php";  
include "../includes/conexao.php";
?>

<div class="container">
    <form name="cadastro-agenda" method="post" action="agenda-inserir.php">           

            <div class="form-row d-flex pb-3 ">  

                <div class="form-group col-md-3 p-2">
                    <label>DATA</label>
                    <input type="date" class="form-control" name="data">
                </div>

                <div class="form-group col-md-3 p-2">
                    <label>HORA</label>
                    <input type="time" class="form-control" name="hora" >
                </div> 

            </div> 

            <div class="form-row d-flex pb-3">  

                <div class="form-group col-md-3 p-2">
                    
                    <label>MÉDICO</label>
                    <select class="form-control" name="id_medico"> 
                        <option value="">Informe o médico</option>
                        <?php                    
                        $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
                        $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

                        while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                            echo "<option value='{$medico['id']}'>"; 
                            echo $medico['nome']; 
                            echo "</option>";
                        }
                        ?>
                        
                    </select>
                </div> 
                <div class="form-group col-md-3 p-2">
                    <label>SALA</label>
                    <input name="sala" class="form-control ">  
                </div>
            </div>
            <div class="form-row" >
                <div class="form-group col-md-6 p-2">
                    <label>PACIENTE</label>
                    <select class="form-control " name="id_paciente">
                        <option value="">Informe o paciente</option>
                        <?php
                            $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
                            $listaDePacientes = mysqli_query($conexao, $sqlBuscaPacientes);

                            while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                                echo "<option value='{$paciente['id']}'>";
                                echo $paciente['nome'];
                                echo "</option>";
                            }
                        
                        ?>
                    </select>
                </div>
            </div>
    
            
            <button type="submit" class="btn btn-danger ">Salvar</button>
            
    </form>

</div><br>
<?php include "../includes/rodape.php";?>