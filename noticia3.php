<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Notícia - Site de Notícias</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

h1 {
    margin: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ffa500;
}

.main-content {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 20px;
}

article {
    background-color: #fff;
    border-radius: 8px;
    margin: 10px;
    padding: 20px;
    width: 80%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

article h2 {
    margin-top: 0;
}

article p {
    margin-bottom: 20px;
}

article a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

article a:hover {
    color: #ffa500;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

</style>

</head>
<body>
    <header>
        <h1>Site de Notícias</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="noticias.html">Notícias</a></li>
                <li><a href="politica.html">Política</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <article>
            <h2>Título da Notícia</h2>
            <p>Descrição da notícia.</p>
            <p>Conteúdo completo da notícia.</p>
            <p>Conteúdo completo da notícia.</p>
            <p>Conteúdo completo da notícia.</p>
            <a href="#">Voltar para Notícias</a>
        </article>
    </section>
    <footer>
        <p>&copy; 2024 Site de Notícias</p>
    </footer>
</body>
</html>