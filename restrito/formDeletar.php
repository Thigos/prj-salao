<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Serviço</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
    <style>
        .div-deletarServicos{
            width: 350px;
            justify-content: center;
            align-items: center;
            justify-items: center;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 33px;
          }
    </style>

    <div class="div-deletarServicos" id="servicos">

        <form method="post" action="deleta-servico.php" >

        <label class="sr-only"> id Servico</label>
        <input style="width: 350px;"  type="text" name="idServico" class="form-control" placeholder="id" >
        <br>
        <button style="background-color: #029948; border-color: #029948; width: 200px; width: 350px; font-family: Poppins-Medium;" class="btn btn-lg btn-primary btn-block" type="submit" value="deletar">Deletar</button>
        </form>
    </div>   
</body>
</html>