<?php

require('conexao.php');


    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    $OPCAO = $_POST['cadastrar'];


if ($nome == "" || $sexo == "" || $nascimento == "" || $email == "" || $senha == "" || $senha2 = "") {
    echo "<script language='javascript' type='text/javascript'>alert('os campos devem ser preenchidos');window.location.href='formulario.php';</script>";
} else if ($OPCAO == 'inserir'{
    $sql = "INSERT INTO cadastroUsuarios(nome, sexo, nascimento, email, senha, senha2) VALUES('$nome', '$sexo', '$nascimento', '$email', '$senha', '$senha2')";
    $RETORNO = mysqli_query($icon,$sql);

    if($RETORNO == true){
        echo "<script language='javascript' type='text/javascript'>alert('cadastro Efetuado!');window.location.href='index.php';</script>"; 
    }else{
        echo "<script language='javascript' type='text/javascript'>alert('cadastro não efetuado!');window.location.href='index.php';</script>";
        }
    }
