<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salãozada</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">

        <style>
          .div-top-main {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
          }

          .div-top-img{
            height: 100%;
            width: 100%;
            background-image: url(../img/ftModelo.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: right top;
            background-attachment: fixed;
          }

          .div-top-text{
              max-width: 650px;
              border-left: 4px solid var(--secondary-color);
              color: white;
              padding-left: 10px;
              margin-left: 6%;
              position: absolute;
          }

          
          
        </style>
    </head>
    <body>

      
      <!--Navbar-->
      <?php 
        include_once("navbar-restrita.php");
      ?>
      
      <!--h80%-->
      <div class="div-top-main">
        <div class="div-top-img"> </div>
        <div class="div-top-text">
          <h1 style="color: var(--secondary-color); font-size: 48px; font-family: Poppins-Medium;">Área do Funcionário</h1>
          <h3>Cadastre serviços e adicione fotos na galeria</h3>
        </div>
      </div>

    </body>
</html>