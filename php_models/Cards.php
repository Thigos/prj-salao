<?php

    class Cards{
        public function createCard($img, $title, $text, $link, $textLink){
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
            
            $cardHtml = "<div class='col-md'>
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
    
    }
    
?>