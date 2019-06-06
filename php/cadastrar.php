<?php
if (
    !empty($_POST['nome']) && !empty($_POST['sexo']) && !empty($_POST['nascimento'])
    && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['senha2'])
) {

    require_once 'conexao.php';


    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    if($senha === $senha2){
        $query = "INSERT INTO cadastroUsuario (nome, sexo, nascimento, email, senha) VALUES ('$nome', '$sexo','$nascimento', '$email', '$senha')";
        $insere = mysqli_query($con, $query);
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Cadastrado');
        window.location.href='index.php';
        </script>");
    }else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('As senhas não correspodem');
        window.location.href='index.php';
        </script>");    }
} else {
    echo "preencha os campos corretamento, por gentileza rs";
}
?>