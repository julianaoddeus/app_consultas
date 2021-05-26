<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                
                <form class="box" method="post" action="login.php" name="formulario-login">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="text" name="usuario" > 
                    <input type="password" name="senha" > 
                    <a class="forgot text-muted" href="#">Forgot password?</a> 
                    <p class="text-muted" id="msg"></p>
                    <input type="submit" name="forgot" value="Login" href="#">
                    
                    <?php
        
                    if(isset($_GET['mensagem'])){
                        if($_GET['mensagem'] == 'errado'){ 
                        echo "<script type='text/javascript'>getElementById(msg).innerHTML = <p>usuário ou senha inválido.</p></script>";
                            
                        }
                    }
                    ?>    
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        
       
       

</body>
</html>