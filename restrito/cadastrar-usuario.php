<?php
    require_once("../bd_models/Usuario.php");

    $usuario = new Usuario();

    $usuario->setNomeUsuario($_POST['nomeUser']);
    $usuario->setLoginUsuario($_POST['loginUser']);
    $usuario->setSenhaUsuario($_POST['senhaUser']);

    $usuario->cadastrar($usuario);

    header("Location: cadUsuario.php");
?>