<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Cliente</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">
        <style>
            .div-main{
                width: 100%;
                position: absolute;
                top: 80px;
                padding: 20px;
            }

            .card {
                min-height: 250px !important;
                margin: 0 auto;
                float: none;
                margin-bottom: 20px;
            }

            input {
                border: none;
                border-bottom: 1.2px solid #00000038;
                margin-top: 10px;
            }
        </style>

    </head>
    <body>
        <!--Include/require-->
        <?php 
            include_once("../php_models/navbar-restrita.php");
            include_once("../php_models/Cards.php");
            require_once("../bd_models/Cliente.php");

        ?>
      
        <div class="div-main">
            <div class="row">
                <div class='col-md col-xl-3'>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Cliente</h5>
                            <form method="post" action="cadastrar-cliente.php">
                                <input type="text" maxlength="100" placeholder="Nome" name="nomeCliente" required>
                                <input type="text" placeholder="CPF" name="cpfCliente" required>
                                <input type="text" placeholder="Número de Celular" name="celularCliente" required>
                                <button class="bt-cadastrar" type="submit">Cadastrar</button>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <?php
                    try {
                        $cliente = new Cliente();
                        $listCliente = $cliente->listar();
                        
                    } catch(Exception $e) {
                        // echo '<pre>';
                        //     print_r($e);
                        // echo '</pre>';
                        echo $e->getMessage();
                    }


                    foreach ($listCliente as $linha){
                        Cards::createInputCard($linha['idcliente'], 
                        $linha['nomecliente'],
                        $linha['cpfcliente'],
                        substr($linha['celularcliente'], 0, 4).'-'.substr($linha['celularcliente'], 4),
                        "Cliente: ", "atualizar-cliente.php");

                    }

                    
                ?>
            </div>
        </div>
        

        <script src="../js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        <script type="text/javascript">
            $('[name="cpfCliente"]').mask("000.000.000-00");
            $('[name="celularCliente"]').mask("0000-00000");
        </script>

    </body>
</html>