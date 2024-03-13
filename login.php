

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Notícias do Dia</title>

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

        .home-button {
    text-decoration: none;
    color: #fff;
    padding: 5px 10px;
    background-color: #007bff;
    border-radius: 5px;
    position: absolute;
    top: 20px; /* Distância do topo */
    right: 20px; /* Distância da direita */
}

.home-button:hover {
    background-color: #0056b3;
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

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>

</head>
<body>
    <header>
        <h1>Notícias do Dia</h1>
        <a href="home.php" class="home-button">Home</a>
    </header>

    <div class="login-container">
        <h2>Faça Login</h2>
        <form action="config_login.php" method="POST" class="formLogin">
            <label for="email">Usuário:</label>
            <input type="text" id="email" name="email" required>

            <label for="email">Senha:</label>
            <input type="text" id="senha" name="senha" required>

            <p>Ainda não possui uma conta? <a href="cadastro.php" class="cadastro-button">Cadastrar</a></p> 
            

            <button type="submit" name="submit" value="Acessar" class="btn">Entrar</button>


        </form>
    </div>

    <footer>
        <p>&copy; 2024 Notícias do Dia. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

