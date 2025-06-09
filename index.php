<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
    <title>Design</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="Background-color:rgb(255, 241, 241);">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Titulo no meio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resultados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Avaliações
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeria de Fotos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php

        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";

        if ($page == "pages") {
            $pagina = "pages/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
        ?>
    </main>
    <footer>
        <p>Desenvolvido por Francesco Gris</p>
    </footer>
</body>

</html>