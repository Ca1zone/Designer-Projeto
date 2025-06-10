<?php 

if (isset($_GET["param"])) {
    $param = $_GET["param"];
    $p = explode("/", $param);
}

$pages = $p[0] ?? "home";

if (file_exists($pages)) {
    include $pages;
} else {
    include "pages/erro.php";
}
?>