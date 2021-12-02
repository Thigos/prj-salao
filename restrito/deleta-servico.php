<?php
    require_once('../bd_models/Servico.php');

    header("Location: index-restrita.php?msg=1");

    $servico = New Servico();

    $servico->setIdServico($_POST['idServico']);

    $servico->deletar($servico);
?>