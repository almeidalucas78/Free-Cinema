<?php
require_once 'conexao.php';

$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];


  if (isset($entrar)) {
           
    $consulta = "SELECT email, senha FROM cadastroUsuario WHERE   email = '$email'  AND  senha = '$senha' ";
    $exe = mysqli_query($con, $consulta);
    $confere = mysqli_num_rows($exe);
    if($confere > 0){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('logado com sucesso');
        window.location.href='logado.php';
        </script>");
  }else{
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('erro');
        window.location.href='index.php';
        </script>");
            
    }
  }
?>