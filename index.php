<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>phpOO - Orientado a Objeto</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header>
                <img src="imagens/logo.png"/>
                <div class="well">
                    <h1 class="text-center">Phpoo Crud - Orientado a Objeto -> 
                        <span class="text-primary"> MPS</h1>
                </div>
            </header>
            <!--FORM CADASTRAR-->
            <div style="margin: 100px 0; text-align: center">
                
                <legend> Formulario Cadastrar</legend>
                <form class="form-inline" method="post">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input name="nome" type="text" class="form-control" required>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input name="email" type="text" class="form-control">
                    </div>
                    
                    <input name="cadastrar" type="submit" class="btn btn-success" value="Cadastrar">
                    
                </form>
            </div>
            <!--FIM-->
            
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModal" onclick="load_modal('', '')">
                                Alterar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
                
        </div>
    </body>
</html>
