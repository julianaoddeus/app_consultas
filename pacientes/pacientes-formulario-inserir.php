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

            <div class="form-row d-flex pb-3">  
                 <div class="form-group col-md-3 p-2">
                    <label> DATA NASCIMENTO</label><input type="date" class="form-control" id="dataNascimento"  name="dataNascimento">
                </div>
                
                <div class="form-group col-md-3 pt-5">
                   <label>CONVÊNIO</label> <input type="checkbox"  id="convenio" name="convenio" value="sim"> 
                </div>
            </div>

            <div class="form-group col-md-3 p-2">
                    <label> DIAGNÓSTICO</label><textarea  class="form-control" id="diagnostico"  name="diagnostico"></textarea>
                </div>
            <button type="submit" class="btn btn-danger ">Salvar</button>
            
    </form>

</div><br>
<?php include "../includes/rodape.php";?>