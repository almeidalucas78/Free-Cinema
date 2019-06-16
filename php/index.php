<?php
require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free Cinema</title>
    <link rel="icon" type="imagem/png" href="../img/icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/mainStyle.css" type="text/css">

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
                            <li><a class="itens-menu" href="index.php">Home</a></li>
                            <li><a class="dropdown-trigger itens-menu" href="#!" data-target="dropdown1">Filmes<i class="material-icons right"></i></a></li>
                            <li><a class="itens-menu" href="#">Séries</a></li>
                            <li><a class="itens-menu" href="#">Animes</a></li>
                            <li><a class="itens-menu" href="#">Lançamentos</a></li>
                            <li><a href="#cadastro" class="btn purple darken-2 modal-trigger">Registrar</a></li>
                            <li><a href="#login" class="btn red accent-3 modal-trigger ">login</a></li>
                        </ul>

                    </div>
                </div>
            </nav>

            <!-- MODAL DE CADASTRO -->
            <div class="modal" id="cadastro">

                <div class="modal-content">
                    <form id="formulario" action="cadastrar.php" method="POST">
                        <div class="col s12 14 offset-14">
                            <div class="card">
                                <div class="card-action  center-align  purple darken-3 white-text">
                                    <h3>Cadastro</h3>
                                </div>

                                <div class="card-content">
                                    <div class="form-field">
                                        <label for="nome">Nome Completo</label>
                                        <input required type="text" name="nome">
                                    </div><br>
                                    <div class="form-field ">
                                        <label>Sexo:</label><br><br>
                                        <label>
                                            <input required class="radioM" name="sexo" value="M" type="radio" />
                                            <span>Masculino</span>
                                        </label>
                                        <label class="radioF">
                                            <input id="sexo" name="sexo" value="F" type="radio" />
                                            <span>Feminino</span>
                                        </label>
                                    </div><br>
                                    <div class="input-field">
                                        <label for="dataNascimento">Data de Nascimento</label><br>
                                        <input required name="nascimento" type="date">
                                    </div><br>
                                    <div class="form-field">
                                        <label for="email">Email</label>
                                        <input required type="email" name="email">
                                    </div><br>
                                    <div class="form-field">
                                        <label for="senha">Senha</label>
                                        <input required type="password" name="senha">
                                    </div><br>
                                    <div class="form-field">
                                        <label for="senha2">Confirme sua senha</label>
                                        <input required type="password" name="senha2">
                                    </div><br>
                                    <div class="form-field center-align ">
                                        <input type="submit" class="btn-large  purple darken-3" name="cadastrar" value="Cadastrar">
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="btn red lighten-1">Cancelar</a>
                </div>
            </div>


            <!-- MODAL DE LOGIN -->

            <div class="modal" id="login">
                <div class="modal-content">
                    <form id="formularioLogin" action="logar.php" method="POST">
                        <div class="col s12 14 offset-14">
                            <div class="card">
                                <div class="card-action  center-align  purple darken-3 white-text">
                                    <h3>Login</h3>
                                </div>
                                <div class="card-content">
                                    <div class="form-field">
                                        <label for="Email">Email</label>
                                        <input type="email" name="email" id="email">
                                    </div><br>
                                    <div class="form-field">
                                        <label for="senha">Senha</label>
                                        <input type="password" name="senha" id="senha">
                                    </div><br><br>
                                    <div class="form-field center-align ">
                                        <input type="submit" name="entrar" class="btn-large  purple darken-3" value="Entrar">
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="btn red lighten-1">Cancelar</a>
                </div>
            </div>

            <!--CONTEUDO-->

            <div class="container">
                <div class="row">
                    <div class="col s12">

                        <p class="title-page">Free Cinema</p>
                        <p class="subtitulo-page">ENTRE PARA TER ACESSO A FILMES, SERIES E ANIMES ONLINE</p>

                    </div>
                </div>

                <div class="row">
                    <div class="col s4 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../img/got.jpeg">
                                <span class="card-title">Game Of Thrones</span>
                            </div>
                            <div class="card-content">
                                <p>Famílias nobres e poderosas disputam um jogo mortal pelo controle dos Sete Reinos
                                    de Westeros para assumir o Trono de Ferro.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Faça login para assistir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../img/vingadores.jpg">
                                <span class="card-title">Vingadores Ultimato</span>
                            </div>
                            <div class="card-content">
                                <p> Vingadores têm de lidar com a perda de amigos e entes
                                    queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram
                                    a resistência contra o titã louco.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Faça login para assistir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../img/bomba.jpg">
                                <span class="card-title">Chernobyl</span>
                            </div>
                            <div class="card-content">
                                <p>Homens e mulheres corajosos agem heroicamente para mitigar danos catastróficos quando a Usina
                                    Nuclear de Chernobyl sofre um acidente nuclear em 25 de abril de 1986.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Faça login para assistir</a>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col s12">

                        <p class="subtitulo-page">E MUITO MAIS...</p>

                    </div>
                </div>

            </div>




        </div>
    </div>
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