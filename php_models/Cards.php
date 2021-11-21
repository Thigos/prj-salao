<?php

    class Cards{
        public function createCard($img, $title, $text, $link, $textLink, $classes){
            $visibility = array(
                "img" => "visible",
                "text" => "visible",
                "title" => "visible",
                "link" => "visible"
            );

            if($img == "null"){
                $visibility["img"] = "hidden";
            }

            if($title == "null"){
                $visibility["title"] = "hidden";
            }

            if($text == "null"){
                $visibility["text"] = "hidden";
            }

            if($link == "null"){
                $visibility["link"] = "hidden";
            }            
            
            $cardHtml = "<div class='".$classes."'>
                            <div class='card' style='width: 18rem;'>
                                <img class='card-img-top' style='visibility: ".$visibility["img"].";' src='".$img."' alt='Card image cap'>
                                <div class='card-body'>
                                    <h5 class='card-title' style='visibility: ".$visibility["title"].";'>".$title."</h5>
                                    <p class='card-text' style='visibility: ".$visibility["text"].";'>".$text."</p>
                                    <div class='custom-bt' style='visibility: ".$visibility["link"].";'><a href=".$link.">".$textLink."</a></div>
                                </div>
                            </div>
                        </div> ";

            echo($cardHtml);
            
        }

        public function createInputCard($idCliente, $nome, $cpf, $numCel, $txt, $action){
            $cardHtml = "<div class='col-md col-xl-3'>
                <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$txt.$idCliente."</h5>
                        <form method='post' action='".$action."'>
                            <input type='hidden' name='inp0' value='".$idCliente."' />
                            <input type='text'  value='".$nome."' name='inp1' required>
                            <input type='text' value='".$cpf."' name='inp2' required>
                            <input type='text' value='".$numCel."' name='inp3' required>
                            <button class='bt-cadastrar' name='atualizar' type='submit'>Atualizar</button>
                            <button class='bt-delete' name='delete' type='submit'>Remover</button>
                        </form>
                        
                    </div>
                </div>
            </div>";

            echo($cardHtml);
        }
    
    }
    
?>