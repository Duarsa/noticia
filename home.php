
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
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

.login-button {
    text-decoration: none;
    color: #fff;
    padding: 5px 10px;
    background-color: #007bff;
    border-radius: 5px;
    position: absolute;
    top: 20px; /* Distância do topo */
    right: 120px; /* Distância da direita */
}

.login-button:hover {
    background-color: #0056b3;
}


.cadastro-button {
    text-decoration: none;
    color: #fff;
    padding: 5px 10px;
    background-color: #007bff;
    border-radius: 5px;
    position: absolute;
    top: 20px; 
    right: 20px;
}

.cadastro-button:hover {
    background-color: #0056b3;
}


nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 90px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
}

section.news {
    margin: 20px;
}

article {
    margin-bottom: 20px;
}

article h2 {
    color: #333;
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
        <h1 class="titulo">Notícias do Dia</h1>
        <a href="login.php" class="login-button">Login</a>
        <a href="cadastro.php" class="cadastro-button">Cadastrar</a>

        <nav>
        <ul>
            <li><a href="politica.php">Política</a></li>
            <li><a href="economia.php">Economia</a></li>
            <li><a href="tecnologia.php">Tecnologia</a></li>
            <li><a href="entretenimento.php">Entretenimento</a></li>
        </ul>
    </nav>
    </header>

    



    <section class="news">
        <article>
            <h2>Rogerio Marinho diz que governo federal tem política 'retrógrada'</h2>
            <p>O governo anuncia novas medidas para impulsionar a economia do país.</p>
            <a href="#">Leia mais...</a>
        </article>
        <article>
            <h2>Crescimento Econômico no Último Trimestre</h2>
            <p>O país registra um crescimento econômico de 3% no último trimestre, superando as expectativas dos analistas.</p>
            <a href="#">Leia mais...</a>
        </article>
        <article>
            <h2>Avanços na Tecnologia de Inteligência Artificial</h2>
            <p>Cientistas anunciam avanços significativos na área de inteligência artificial, abrindo portas para aplicações inovadoras.</p>
            <a href="#">Leia mais...</a>
        </article>
        <article>
            <h2>Lançamento de Filme Blockbuster</h2>
            <p>O novo filme de ação atinge recordes de bilheteria no fim de semana de estreia.</p>
            <a href="#">Leia mais...</a>
        </article>
    </section>

    <footer>
        <p>&copy; 2024 Notícias do Dia. Todos os direitos reservados.</p>
    </footer>
</body>
</html>