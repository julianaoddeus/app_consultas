<?php include "../includes/cabecalho.php";?>

<div class="container">
<form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
        
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>NOME</label><input type="text" class="form-control" id="nome" name="nome">
            </div><br>
            <div class="form-group col-md-3">
                <label>TELEFONE</label><input type="text" class="form-control" id="telefone" name="telefone" >
            </div><br>        
            
</div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>CRM</label><input type="text" class="form-control" id="crm"  name="crm">
            </div><br>
            
            <div class="form-group col-md-3">
                <select id="cor" class="form-control" name="especialidade">
                        <option selected>ESPECIALIDADES</option>
                        <option value="Cardiologista">Cardiologista</option>
                        <option value="Nutricionista">Nutricionista</option>
                        <option value="Ortopedista">Ortopedista</option>
                </select>
            </div>
        <br>
        </div>
<p>
    <button type="submit" class="btn btn-primary">Salvar</button>
</p>
</form>

</div>






<?php include "../includes/rodape.php";?>