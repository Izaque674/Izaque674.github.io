<?php



?>

<html>
    <head>
        <title>Chamado Real</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   
        <style>
        .card-login{
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;

        }
        </style>
    </head>
    <body>
        <nav class = "navbar navbar-dark bg-dark"></nav>
        <a href="#"class = "navbar-brand">
            <img src="logo.png" width="30" height="30" class = "d-inline-block aling-top" alt="">
            Chamado Real
        </a>
        <nav class= "container">
            <div class = "row">
                <div class="card">
                    <div class = "card-header">
                        Login
                    </div>
                    <div class= "card-body">
                        <form action="valida_login.php" method="post">
                            <div class = "form-group">
                                <input name="email" type ="email" class = "form-control" placeholder="E-mail">
                            </div>
                            <div class = "form-group">
                                <input  name ="senha"type="password" class = "form-control" placeholder ="senha">
                            </div>
                            <?php  if(isset($_GET['login'])&& $_GET['login']== 'erro') {?>
                            <div class = "text-danger">
                                Usuario ou senha invalido.
                            </div>
                            <?php } ?>

                            <button class="btn= btn-lg btn-info btn-block" type= submit>
                                Entrar.
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </nav>
    </body>

</html>
