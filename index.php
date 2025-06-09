<?php

    if (isset($_GET["param"])) {
        $param = $_GET["param"];
        $p = explode("/", $param);
    }

    $page = $p[0] ?? "home";
    $jogo = $P[1] ?? NULL;

    if($page == "jogo") {
        echo $pagina = "jogo/{$jogo}.php";
    } else {
        echo $pagina = "pages/{$page}.php";
    }
?>