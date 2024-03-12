<?php
if(isset($_POST['submit'])){

    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];


    $result = mysqli_query($conexao, "INSERT INTO cad_users(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco,senha,conf_senha) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco', '$senha', '$conf_senha')");

}
    

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">

    <style>
             body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .login-container h2 {
            text-align: center;
        }

        .login-container form {
            margin-top: 20px;
        }

        .login-container form label {
            display: block;
            margin-bottom: 5px;
        }

        .login-container form input[type="text"],
        .login-container form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container form button {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container form button:hover {
            background-color: #0056b3;
        }

form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 100%;
}

.submit {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.submit:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
    color: #007bff;
    margin-top: 10px;
    display: inline-block;
}

a:hover {
    color: #0056b3;
}

footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

    </style>

</head>

<header>
        <h1>Notícias do Dia</h1>
        <a href="home.php" class="home-button">Home</a>
</header>

<body>
    
    <div class="container">

        <h2>Faça Login</h2>
        <form action="cadastro.php" method="POST" class="formCadastro">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>

            <div class="form-group">
                <label for="data_nasc">Data de Nascimento:</label>
                <input type="date" id="data_nasc" name="data_nasc" required>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>

            <div class="form-group">
                <label for="endereco">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <div class="form-group">
                <label for="endereco">Confirmar Senha:</label>
                <input type="password" id="conf_senha" name="conf_senha" required>
            </div>

            <button type="submit" name="submit" class="btn">Enviar</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Notícias do Dia. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
