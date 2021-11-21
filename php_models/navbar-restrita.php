<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index-restrita.php">Home </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="formServico.php">Cadastrar Serviços </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="galeria-restrita.php">Publicações </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Agenda</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="cadUsuario.php">Usuários</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="cadCliente.php">Clientes</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="logout.php">Sair</a>
        </li>
        </ul>
    </div>
</nav>

<?php
    session_start();
    if($_SESSION['login-session'] == ''){
        header("Location: ../index.php");
    
    }
?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>