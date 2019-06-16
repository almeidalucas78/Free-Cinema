<?php
require_once 'conexao.php';

$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];


if (isset($entrar)) {

  $consulta = "SELECT email, senha, nome FROM cadastroUsuario WHERE   email = '$email'  AND  senha = '$senha'";

  $exe = mysqli_query($con, $consulta);
  $usuario = mysqli_fetch_assoc($exe);
  session_start();
  $_SESSION['nome'] = $usuario['nome'];
  echo $usuario['nome'];
  $confere = mysqli_num_rows($exe);
  if ($confere > 0) {
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('logado com sucesso');
        window.location.href='logado.php';
        </script>");
  } else {
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login ou senha incorretos');
        window.location.href='index.php';
        </script>");
  }
}
