<?php 
require_once('init.php');
          
$noticiaId = $_GET['noticiaId'];

$noticia = $_SESSION['noticias'][$noticiaId];
 ?>
<html lang="pt-BR">
<head>
</head>
<body>
    <h1> <?php echo $nomeSite; ?> </h1>

    <h3><?php echo $noticia['titulo']; ?></h3>
    <img src="<?php echo $noticia['imagem']; ?>">
    <p><?php echo $noticia['descricao']; ?> </p>
    Fonte: <a href="<?php echo $noticia['fonte']; ?>"><?php echo $noticia['$fonteSite']; ?></a>
</body>
</html>

