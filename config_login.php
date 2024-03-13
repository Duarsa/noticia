<?php
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
    $sql = "SELECT * FROM cad_users WHERE email='$email' AND senha='$senha'";

    $result = $conexao-> query($sql);

    //print_r($result);

    header('Location: home.php');

}else{
    //não precisa
    header('Location: cadastro.php');
}

?>