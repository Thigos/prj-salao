<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salãozada</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <style>
          .div-top-main {
            width: 100%;
            height: 700px;
            display: flex;
            flex-direction: column;
            justify-content: center;
          }

          .div-top-img{
            height: 100%;
            width: 100%;
            background-image: url(img/ftModelo.png);
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

          .div-linha{
            display: flex;
            justify-content: space-around;
            flex-direction: row;
            margin-top: 50px; 
            height: 400px;
            border-bottom: 1px solid #00000049;
            border-radius: 33px;
          }

          .div-linha-text{
            margin-left: 10px;
            margin-right: 10px;
            text-align: justify;
            max-width: 600px;
            display: flex;
            justify-items: center;
            justify-content: center;
            flex-direction: column;
          }

          
          .div-custom-card{
            margin-left: 10px;
            margin-right: 10px;
            min-width: 350px;
            height: 350px;
            transition: 300ms;
          }

          @media (max-width: 700px) {
            .div-linha{
              flex-wrap: wrap;
              margin-bottom: 100px;
              margin-top: 100px;
              border: none;
            }

            .div-custom-card{
              box-shadow: none !important;
            }
          }



          .div-custom-card:hover{
            transform: scale(1.05);
          }

          
        </style>
    </head>
    <body>

      
      <!--Navbar-->
      <?php 
        include_once("navbar.php");
      ?>
      
      <!--h80%-->
      <div class="div-top-main" title="Imagem de himanshu gunarathna por Pixabay">
        <div class="div-top-img"> </div>
        <div class="div-top-text">
          <h1 style="color: var(--secondary-color); font-size: 48px; font-family: Poppins-Medium;">Salão de beleza e estética</h1>
          <h3>Serviços completo para a valorização da beleza dos nossos clientes</h3>
        </div>
      </div>

      <div class="div-linha">
        <div class="div-linha-text">
          <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere aliquid, mollitia incidunt tempora, doloremque obcaecati architecto a qui esse voluptas ut consectetur delectus ad alias impedit odit unde, dolor quam.</h4>
        </div>
        <div class="div-custom-card" 
          style="float: right; background-color: var(--secondary-color); box-shadow: -6px 9px 12px 0px var(--primary-color);">

        </div>
      </div>

      <div class="div-linha">
        <div class="div-custom-card" 
          style="float: left; background-color: var(--primary-color); box-shadow: -6px 9px 12px 0px var(--secondary-color);">

        </div>
        <div class="div-linha-text">
          <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex vitae cumque ipsam, quidem porro iste quisquam repudiandae, tempore odio perferendis provident rerum optio voluptas reprehenderit numquam quis sequi eaque magnam.</h4>
        </div>
      </div>

      <div>
        
      </div>

      <!--Footer-->
      <?php 
        include_once("footer.php");
      ?>

    </body>
</html>