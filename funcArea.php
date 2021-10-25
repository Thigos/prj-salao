<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Área do Funcionário</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <style>
            body {
                display: flex;
                /*flex-direction: column;*/
                justify-content: center;
                min-width: 300px;
                min-height: 400px;
            }

            label, h3 {
                color: #fff;
            }

            .label-hidden{
                font-size: small;
                opacity: 0;
                text-align: start;
                margin-bottom: 0px;
                transition: 500ms;
            }

            .inputStyle{
                height: 32px;
                border-radius: 30px;
                margin-bottom: 20px;
                border: none;
                padding: 10px;
                width: 250px;
            }

            .btLG{
                background-color: #fff;
                color: var(--primary-color);
                text-align: center;
                height: 90px;
                font-weight: bold;
                border: none;
                margin-top: 20px;
                border-radius: 50%;
                width: 90px;
                margin-bottom: 30px;
                transition: transform 500ms;
            }

            .btLG:hover{
                cursor: pointer;
                transform: scale(1.1);
            }

            .wrapper{
                top: 25%;
                position: relative;
                overflow: hidden;
                width: 300px;
                height: 400px;
                /*border: 5px solid var(--primary-color);*/
                border: none;
                border-radius: 33px;
                background: var(--gradient);
                padding: 20px;
                text-align: center;
            }

            .wrapper::after {
                content: "";
                position: absolute;
                background-color: #fff;
                height: 200%;
                width: 200%;
                bottom: -50%;
                left: -50%;
                border-radius: 37%;
                animation: spin 4s forwards cubic-bezier(0, 0.3, 0.58, 1);
            }

            .div-message{
                display: flex;
                flex-direction: column;
                justify-content: center;
                position: absolute;
                bottom: -40px;
                left: 10px;
                background-color: var(--primary-color);
                width: 300px;
                height: 40px;
                color: white;
                text-align: center;
                border-radius: 33px;
                transition: 1s;
            }

            footer {
                position: absolute;
                bottom: -160px
            }

            @keyframes spin {
            from {
                transform: translateY(0) rotate(0deg);
            }
            to {
                transform: translateY(-80%) rotate(360deg);
            }
            }
        </style>
    </head>
    <body>
        <!--Navbar-->
        <?php 
            include_once("navbar.php");

        ?>

        <div class="wrapper">
            <h3 style="margin-top: 20px;">Área do Funcionário</h3>
    
            <form method="post" action="valida-login.php">
                <label class="label-hidden" id="lbUser">Usuário</label><br>
                <input class="inputStyle" name="lbUser" placeholder="Usuário" onkeyup="showLabelUser();" required>
                <br>
                <label class="label-hidden" id="lbPass">Senha</label><br>
                <input type="password" name="lbPass" class="inputStyle" placeholder="Senha" onkeyup="showLabelPass();" required>
                <br>
                <button class="btLG" id="btLG" type="submit">Login</button>
            </form>
        </div>

        <div class="div-message" id="divMessage">
            <p style="margin:0;">Usuário incorreto!</p>
        </div>

        <?php
            if(isset($_GET['auth'])){
                if ($_GET['auth'] == "false"){
                    echo("<script>
                    setTimeout(() => {
                        document.getElementById('divMessage').style.bottom = '60px';
                        console.log(document.getElementById('divMessage').style.bottom)
                    }, 500);
                    </script>");
                }
            }
        ?>

        <!--Footer-->
        <?php 
            include_once("footer.php");
        ?>
    
        <script>            

            function showLabelUser(){
                document.getElementById("lbUser").style.opacity = 1;
            }
    
            function showLabelPass(){
                document.getElementById("lbPass").style.opacity = 1;
            }
        </script>

    </body>
</html>