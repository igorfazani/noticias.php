<?php
require_once 'init.php';

$noticiaAntes = count($_SESSION['noticias']);
$_SESSION['noticias'][] = $_POST;
$noticiaDepois = count($_SESSION['noticias']);

if( $noticiaDepois > $noticiaAntes) {
    header('Location: PaginaNoticias.php');
    exit;
} else {
    print 'Erro ao adicionar Notícia';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
     
</head>
<body style="background-color:dodgerblue">
    
</body>
</html>