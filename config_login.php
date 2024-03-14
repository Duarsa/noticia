<?php

session_start();
//print_r($_REQUEST); //confirmar se envia dados


if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    //acessar o sistema
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /*
    print_r('Email: '. $email);
    print_r('<br>');
    print_r('Senha: '. $senha);
    */
    $sql = "SELECT * FROM cad_users WHERE email='$email' and senha='$senha'";

    $result = $conexao-> query($sql);

    if(mysqli_num_rows($result)<1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: login.php');
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header('Location: sistema.php');

    }

}else{
    //não precisa
    header('Location: cadastro.php');
}

?>