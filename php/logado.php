<?php
require_once 'conexao.php';
?>

<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="icon" type="imagem/png" href="../img/icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/logado.css" type="text/css">

</head>


<body>
    <div class="background1">
        <div class="background2">
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">Ação</a></li>
                <li><a href="#!">Aventura</a></li>
                <li class="divider"></li>
                <li><a href="#!">Comédia</a></li>
                <li><a href="#!">Romance</a></li>
                <li><a href="#!">Ficção</a></li>
            </ul>

            <nav id="formatacao" class="transparent z-depth-0">
                <div class="container itens-nav">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo">
                            <p class="title_menu">Free Cinema</p>
                        </a>
                        <ul id="nav-mobile" class="posicao-menu hide-on-med-and-down">
                            <li><a class="dropdown-trigger itens-menu" href="#!" data-target="dropdown1">Filmes<i class="material-icons right"></i></a></li>
                            <li><a class="itens-menu" href="#">Séries</a></li>
                            <li><a class="itens-menu" href="#">Animes</a></li>
                            <li><a class="itens-menu" href="#">Lançamentos</a></li>
                            <li class="itens-menu2" href="#">||</li>
                            <li><a class="itens-menu2" href="#">Bem vindo,
                                    <?php
                                    session_start();
                                    echo $_SESSION['nome'];
                                    ?>
                                </a></li>
                        </ul>

                    </div>
                </div>
            </nav>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../js/loading.js"></script>
<script>
    $(document).ready(function() {
        $('.modal').modal();
    });

    $(".dropdown-trigger").dropdown();

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });
</script>

</html>