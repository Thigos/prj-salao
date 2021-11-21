<?php
    require_once("../bd_models/Usuario.php");

    $usuario = new Usuario();

    $usuario->setIdUsuario($_POST['inp0']);
    $usuario->setNomeUsuario($_POST['inp1']);
    $usuario->setLoginUsuario($_POST['inp2']);
    $usuario->setSenhaUsuario($_POST['inp3']);

    if (isset($_POST['atualizar'])) {
        $usuario->atualizar($usuario);
    }
    elseif (isset($_POST['delete'])) {
        $usuario->deletar($usuario);    
    }

    header("Location: cadUsuario.php");
?>