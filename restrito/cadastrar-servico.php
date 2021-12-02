<?php
    require_once('../bd_models/Servico.php');

    header("Location: formServico.php?msg=1");

    $servico = New Servico();

    $servico->setDescServico($_POST['descServico']);

    $servico->setTextoServico($_POST['textoServico']);
    
    $nome = $_FILES['fotoServico']['name'];
    
    $arquivo = $_FILES['fotoServico']['tmp_name'];

    $caminhoimagem = "../img/$nome" . $nome;
      
    move_uploaded_file($arquivo, $caminhoimagem);
        
    $servico->setFotoServico($caminhoimagem);

    $servico->cadastrar($servico);
?>