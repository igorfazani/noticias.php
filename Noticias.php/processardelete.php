<?php
    require_once('PaginaNoticias.php');
    if (isset($_GET['id'])) {
        unset($_SESSION['noticias'][$_GET['id']]);
        header("Location: PaginaNoticia.php");
        exit();
    } else {
        print "ID da notícia não fornecido.";
    }
?>