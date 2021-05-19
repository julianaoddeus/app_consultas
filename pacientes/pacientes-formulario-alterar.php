<?php include "../includes/cabecalho.php";?>

<div class="container">
    <form name="formulario-inserir-pacientes" method="post" action="pacientes-inserir.php">
            
            <div class="form-row d-flex pb-3 ">
                <div class="form-group col-md-3 p-2">
                    <label>NOME</label><input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="form-group col-md-3 p-2">
                    <label>TELEFONE</label><input type="text" class="form-control" id="telefone" name="telefone" >
                </div> 
                
                <br>
            </div> 

            <div class="form-row  pb-3">  
                 <div class="form-group col-md-3 p-2">
                    <label>DATA DE NASCIMENTO</label><input type="date" class="form-control" id="dataNascimento"  name="dataNascimento">
                </div>
                <div class="form-group col-md-3 p-2">
                    
                    <input type="checkbox"  id="convenio" name="convenio"> <label>CONVÊNIO</label>
                </div>

                
            </div>
            <button type="submit" class="btn btn-danger mt-3">Salvar</button>
            
    </form>

</div><br>






<?php include "../includes/rodape.php";?>