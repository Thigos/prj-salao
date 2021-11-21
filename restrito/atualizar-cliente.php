<?php
    require_once("../bd_models/Cliente.php");

    $cliente = new Cliente();

    $cliente->setIdCliente($_POST['inp0']);
    $cliente->setNomeCliente($_POST['inp1']);
    $cliente->setCpfCliente($_POST['inp2']);
    $cliente->setCelularCliente(str_replace("-", "", $_POST['inp3']));

    if (isset($_POST['atualizar'])) {
        $cliente->atualizar($cliente);
    }
    elseif (isset($_POST['delete'])) {
        $cliente->deletar($cliente);    
    }

    header("Location: cadCliente.php");
?>