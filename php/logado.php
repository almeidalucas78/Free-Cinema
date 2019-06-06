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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/logado.css" type="text/css">

</head>


<body>
    <ul id="dropdown1" class="dropdown-content">
        <li><a class="  " href="#!">Ação</a></li>
        <li><a href="#!">Aventura</a></li>
        <li class="divider"></li>
        <li><a href="#!">Comédia</a></li>
        <li><a href="#!">Romance</a></li>
        <li><a href="#!">Ficção</a></li>
</ul>

    <nav class="deep-purple darken-3 z-depth-5">
        <div class="container">
                <div class="nav-wrapper">
                        <a href="#" class="brand-logo center"><img src="../img/flash.png"></a>
                        <ul id="nav-mobile" class="left hide-on-med-and-down">
                            <li><a href="#">Home</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Filmes<i
                                        class="material-icons right"></i></a></li>
                            <li><a href="#">Séries</a></li>
                            <li><a href="#">Lançamentos</a></li>
            
                        </ul>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="#">Bem vindo,  <?php 
                                $query = "SELECT nome FROM cadastroUsuario";
                                $exe = mysqli_query($con, $query);

                                        
                                while($res = mysqli_fetch_assoc($exe)){
                                   
                                    echo $res['nome'];
                            
                               } ?>
                            </a></li>
                            <li><a href="#cadastro" class="waves-effect btn  red accent-3 modal-trigger">Editar Perfil</a></li>

                        </ul>
                    </div>
        </div>
    </nav>
    <div class="background1">




    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../js/loading.js"></script>
<script>
    $(document).ready(function () {
        $('.modal').modal();
    });

    $(".dropdown-trigger").dropdown();

    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });

</script>

</html>