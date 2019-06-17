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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>
    <div class="background1">
        <div class="background2">
            <ul id="dropdown1" class="dropdown-content">
                <li><a onclick="mostraAlerta()" href="#!">Ação</a></li>
                <li><a onclick="mostraAlerta()" href="#!">Aventura</a></li>
                <li class="divider"></li>
                <li><a onclick="mostraAlerta()" href="#!">Comédia</a></li>
                <li><a onclick="mostraAlerta()" href="#!">Romance</a></li>
                <li><a onclick="mostraAlerta()" href="#!">Ficção</a></li>
            </ul>

            <nav id="formatacao" class="transparent z-depth-0">
                <div class="container itens-nav">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo">
                            <p class="title_menu">Free Cinema</p>
                        </a>
                        <ul id="nav-mobile" class="posicao-menu hide-on-med-and-down">
                            <li><a onclick="mostraAlerta()" class="dropdown-trigger itens-menu" href="#!"
                                    data-target="dropdown1">Filmes<i class="material-icons right"></i></a></li>
                            <li><a onclick="mostraAlerta()" class="itens-menu" href="#">Séries</a></li>
                            <li><a onclick="mostraAlerta()" class="itens-menu" href="#">Animes</a></li>
                            <li><a onclick="mostraAlerta()" class="itens-menu" href="#">Lançamentos</a></li>
                            <li class="itens-menu2 separador" href="#">||</li>
                            <li><a class="itens-menu2" href="#">Bem vindo,
                                    <?php session_start();
                                echo $_SESSION['nome']; ?></a></li>

                            <li></li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col s12">

                        <h1 class="title-page">Free Cinema</h1>
                        
                        <p class="subtitulo-page">Destaques da Semana</p>

                    </div>
                </div>

                                <!--  FILMES EM DESTAQUE -->

                <div class="row">
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">Capitã Marvel</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/capetamarvel.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">Chernobyl</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/sherno.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">Game of Thrones</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/got.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">VIngadoes Ultimato</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/vinga.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">One Punch Man</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/one.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">shingeki no kyojin</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/shing.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">Vikings</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/viking.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="container-filmes">
                            <p class="title-filme">Shazam</p>
                            <div class="area-filmes">
                                <img class="materialboxed" src="../img/shazam.jpg" width="230px" height="350px">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- CARROSSEL DE FILMES -->
                <div class="row">
                    <div class="col s6">
                        <p class="subtitulo-page2">Filmes de ação</p>
                        <div class="carousel">
                            <a class="carousel-item" href="#one!"><img src="../img/capetamarvel.jpg"></a>
                            <a class="carousel-item" href="#two!"><img src="../img/Romulus.jpg"></a>
                            <a class="carousel-item" href="#three!"><img src="../img/implacavel.jpg"></a>
                            <a class="carousel-item" href="#four!"><img src="../img/VoltaAoJogo.jpg"></a>
                            <a class="carousel-item" href="#five!"><img src="../img/LOGAN.jpg"></a>
                        </div>
                    </div>
                    <div class="col s6">
                        <p class="subtitulo-page2">Filmes de Comédia</p>
                        <div class="carousel">
                            <a class="carousel-item" href="#one!"><img src="../img/plusone.jpg"></a>
                            <a class="carousel-item" href="#two!"><img src="../img/jognny.jpg"></a>
                            <a class="carousel-item" href="#three!"><img src="../img/vovó.jpg"></a>
                            <a class="carousel-item" href="#four!"><img src="../img/guave.jpg"></a>
                            <a class="carousel-item" href="#five!"><img src="../img/mib.jpg"></a>
                        </div>
                    </div>
                </div>
                <!-- END-CARROSSEL DE FILMES ////-->

            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<script>
    function typeWriter(elemento) {
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = '';
        textoArray.forEach((letra, i) => {
            setTimeout(() =>
                elemento.innerHTML += letra, 75 * i);
        });
    }
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function () {
        $('.carousel').carousel();
    });


    const titulo = document.querySelector('h1');
    typeWriter(titulo);


    function mostraAlerta() {
        alert('Disponivel em breve!');
    }

</script>

</html>