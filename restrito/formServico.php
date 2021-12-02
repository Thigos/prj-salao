<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Serviços</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
    <style>
        .div-cadastrarServicos{
            width: 350px;
            justify-content: center;
            align-items: center;
            justify-items: center;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 33px;
          }
        .div-itensCadastrados{
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            font-family: Poppins-Regular, Arial,Tahoma,sans-serif;
          }

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

        <?php 
            include_once("../php_models/navbar-restrita.php");
            include_once("../php_models/Cards.php");
            require_once("../bd_models/Servico.php");

        ?>

    <br>

    <div class="div-cadastrarServicos" id="servicos">

        <form method="post" action="cadastrar-servico.php" enctype="multipart/form-data">

        <label class="sr-only"> Descricao do Serviço</label>
        <input style="width: 350px;"  type="text" name="descServico" class="form-control" placeholder="descricao" >
        <br>
        <label class="sr-only"> Texto Servico</label>
        <input style="width: 350px;"  type="text" name="textoServico" class="form-control" placeholder="texto servico" >
        <br>
        <label class="sr-only"> foto</label>
        <input style="width: 350px;"  type="file" name="fotoServico" class="form-control" >
        <br>
        <button style="background-color: #029948; border-color: #029948; width: 200px; width: 350px; font-family: Poppins-Medium;" class="btn btn-lg btn-primary btn-block" type="submit" value="cadastrar">Cadastrar</button>
        </form>
    </div>

    <?php
            require_once("../bd_models/Servico.php");
            try {
                $servico = new Servico();
                $listaservico = $servico->listar();
                
            } catch(Exception $e) {
                // echo '<pre>';
                //     print_r($e);
                // echo '</pre>';
                echo $e->getMessage();
            }
        ?>

        <div class="div-itensCadastrados" id="servicoCadastrados">
        <table class="table">
            <thead style="background-color: #029948;">
                <tr style="text-align: center; margin-left: auto; margin-right: auto;">
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Texto</th>
                    <th>Foto</th>
                    <th class="acao">Atualizar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <form method="post" action="cadastra-servico">
            <tbody id="resultado">
                <?php foreach ($listaservico as $linha){ ?>
                    <tr style="text-align: center; vertical-align: baseline;">
                        <td><?php echo $linha['idservico'] ?></td>
                        <td><?php echo $linha['descservico'] ?></td>
                        <td><?php echo $linha['textoservico'] ?></td>
                        <td><a target="_blank" href=" <?php echo $linha['fotoservico'] ?> "><img width="100px" src=" <?php echo $linha['fotoservico'] ?> "><a></td>
                        <td><a href="formAtualizar.php">Editar</a></td>
                        <td><a href="formDeletar.php">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
            </form>
        </table>
</body>
</html>
