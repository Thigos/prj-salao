<?php
    require_once("../bd_models/Cliente.php");

    $cliente = new Cliente();

    $cliente->setNomeCliente($_POST['nomeCliente']);
    $cliente->setCpfCliente($_POST['cpfCliente']);
    $cliente->setCelularCliente(str_replace("-", "", $_POST['celularCliente']));

    $cliente->cadastrar($cliente);

    header("Location: cadCliente.php");
?>