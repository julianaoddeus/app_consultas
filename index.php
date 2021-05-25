<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

    <form method="post" action="login.php" name="formulario-login">
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <h3 class="mb-5 text-center heading">APP CONSULTÓRIO</h3>
                            <h6 class="msg-info">administração</h6>
                            <div class="form-group"><label class="form-control-label text-muted">Usuário</label> <input name="usuario" class="form-control"> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Senha</label> <input type="password" name="senha" class="form-control"> </div>
                            <button type="submit" class="btn btn-primary">Acessar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
        <?php
        
            if(isset($GET['mensagem'])){
                if($GET['mensagem'] == 'errado'){ 
                   echo "<script type='text/javascript'> alert('usuário ou senha inválido')</script>";
                    
                }
            }
        
        ?>    
    </form>
    
</body>
</html>