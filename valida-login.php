<?php
    $login = $_POST['lbUser'];
    $senha = $_POST['lbPass'];

    if (($login == 'adm') && ($senha == '123')){
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: restrito/index-restrita.php");
    }
    else{
        
        header("Location: funcArea.php?auth=false");
    }

?>