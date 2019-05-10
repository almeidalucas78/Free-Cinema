<?php 

   $database = 'free_cinema';
   $user = 'root';
   $server = '127.0.0.1:3306';
   $password = '';

    //criar conexao

    $con = mysqli_connect($server, $user, $password, $database);

    //verificar conexão

    if(!$con){
        die("falha de conexão: " .mysqli_connect_error());
    }
    echo "conexão efetuada!";
?>