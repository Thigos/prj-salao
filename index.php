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
            max-height: 80%;
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
            position: relative;
            display: flex;
            justify-content: space-around;
            flex-direction: row;
            margin-top: 50px; 
            height: 400px;
            border-bottom: 1px solid #00000049;
            border-radius: 33px;
            transition: 2s;
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
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 33px;
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

          .div-servicos{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #00000049;
            border-radius: 33px;
          }

          .div-serv-text{
            border-left: 4px solid var(--secondary-color);
            padding-left: 10px;
            margin-bottom: 50px;
          }

          
        </style>
    </head>
    <body>

      
      <!--Navbar-->
      <?php 
        include_once("php_models/navbar.php");
        include_once("php_models/Cards.php")
      ?>
      
      <!--h80%-->
      <div class="div-top-main" title="Imagem de himanshu gunarathna por Pixabay">
        <div class="div-top-img"> </div>
        <div class="div-top-text">
          <h1 style="color: var(--secondary-color); font-size: 48px; font-weight: bold;">Salão de beleza e estética</h1>
          <h3>Serviços completo para a valorização da beleza dos nossos clientes</h3>
        </div>
      </div>

      <div class="div-linha" style="left: -100%;" id="l1">
        <div class="div-linha-text">
          <div style="display: flex; align-items: center;">
            <h1 style="color: var(--secondary-color); font-size: 48px;margin: 0px;">S L A</h1>
            <div style="background-color: var(--secondary-color); width: 150px; height: 3px; margin-left: 30px;"></div>
          </div>
          
          <h4>Um salão planejado para oferecer todos os serviços voltados à beleza e estética, feminina e masculina.</h4>
        </div>
        <div class="div-custom-card" 
          style="float: right; background-color: var(--secondary-color);">
          <img style="border-radius: 33px;" src="img/salao.png" height="100%">
        </div>
      </div>

      <div class="div-linha" style="left: -100%;" id="l2">
        <div class="div-custom-card" 
          style="float: left; background-color: var(--primary-color);">
          <img style="border-radius: 33px;" src="img/corte.png" height="100%">
        </div>
        <div class="div-linha-text">
          <div style="display: flex; align-items: center;">
            <h1 style="color: var(--primary-color); font-size: 48px;margin: 0px;">Diversos Serviços</h1>
            <div style="background-color: var(--primary-color); width: 150px; height: 3px; margin-left: 30px;"></div>
          </div>
          <h4>Corte de Cabelo, Tratamento de Pele, Tratamento e Pintura de Unhas...</h4>
        </div>
      </div>

      <div class="div-servicos" id="servicos">
        <div class="div-serv-text">
          <h1 style="color: var(--secondary-color); font-size: 48px; font-family: Poppins-Medium;">Nossos Serviços</h1>
          <h3>Feito pelas melhores equipes</h3>
        </div>

        <!--Serviços Cards-->
        <div class="row">
          <?php
              //Cards::createCard("img Path", "Card Title", "Card Text", "Button Link", "Button Text");
              Cards::createCard("img/corte.png", "Cortes e Penteados", "Descrição serviço", "#", "Agendar", "col-md");
              Cards::createCard("img/maquiagem.png", "Cortes e Penteados", "Descrição serviço", "#", "Agendar", "col-md");
              Cards::createCard("img/unha.png", "Pintura e Tratamento de Unhas", "Descrição serviço", "#", "Agendar", "col-md");
          ?>
        </div>
      </div>

      <!--Footer-->
      <?php 
        include_once("footer.php");
      ?>

      <script>
        let l1 = document.getElementById("l1");
        let l2 = document.getElementById("l2");

        window.onscroll = function(){
          if(window.scrollY >= (l1.scrollHeight) && l1.style.left != "0px"){
            l1.style.left = 0;
            //console.log("1")
          }
          if(window.scrollY >= (l2.scrollHeight) && l2.style.left != "0px"){
            l2.style.left = 0;
            //console.log("2")
          }
        }
      </script>

    </body>
</html>