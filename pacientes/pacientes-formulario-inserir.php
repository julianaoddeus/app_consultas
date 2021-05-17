<?php include "../includes/cabecalho.php";?>

<div class="container">
    <form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
            
            <div class="form-row d-flex pb-3 ">
                <div class="form-group col-md-3 p-2">
                    <label>NOME</label><input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="form-group col-md-3 p-2">
                    <label>TELEFONE</label><input type="text" class="form-control" id="telefone" name="telefone" >
                </div> 
                
                <br>
            </div> 

            <div class="form-row d-flex pb-3">  
                 <div class="form-group col-md-3 p-2">
                    <label>CRM</label><input type="text" class="form-control" id="crm"  name="crm">
                </div>
                <div class="form-group col-md-3 p-2">
                    <label>ESPECIALIDADES</label>
                    <select class="form-control " name="especialidade">
                            <option selected>Escolha...</option>
                            <option value="Cardiologista">Cardiologista</option>
                            <option value="Nutricionista">Nutricionista</option>
                            <option value="Ortopedista">Ortopedista</option>
                    </select>
                </div>
               
                
            </div>
            <button type="submit" class="btn btn-danger ">Salvar</button>
            
    </form>

</div><br>
<?php include "../includes/rodape.php";?>