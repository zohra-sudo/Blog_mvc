<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $titre ?></title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css" />
<style>
    /* Style général */
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #333;
    }

    #global {
        max-width: 1000px;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    header {
        background: linear-gradient(90deg, #6a11cb, #2575fc);
        color: white;
        padding: 30px 20px;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 2.5em;
    }

    header p {
        margin-top: 10px;
        font-size: 1.1em;
    }

    #contenu {
        padding: 20px 30px;
        line-height: 1.7;
    }

    footer#piedBlog {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 15px 20px;
        font-size: 0.9em;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Quelques styles pour le contenu dynamique */
    h2 {
        color: #2575fc;
        margin-top: 30px;
    }

    p {
        margin-bottom: 15px;
    }

    .article {
        border-bottom: 1px solid #ddd;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<div id="global">
    <header>
        <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
        <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
    </header>

    <div id="contenu">
        <?= $contenu ?> <!-- Contenu dynamique -->
    </div>

    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
    </footer>
</div> <!-- #global -->
</body>
</html>
