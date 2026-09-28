<?php
require_once('init.php');
     ?>
<!DOCTYPE html>
<html lang="pt-BR">
        <head>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <body style="background-color:dodgerblue">
     <h1><?php print($nomeSite);?></h1>

  <?php
  require_once 'nav.php';
    foreach ($_SESSION['noticias'] as $chaveNoticia =>$noticia) {
       print '
           <hr>
           <img src="' . $noticia['imagem']. '">
           
        <p>' . $noticia['titulo'] .'</p>
     <p> <a href="Noticiadetalhe.php?noticiaId='.$chaveNoticia.'">Saiba Mais... </a></p>';
  }  ?> 
  
  <!DOCTYPE html>
  <html lang="pt-BR">
  <head>
  </head>
  <body><a href="FormulariopgSenai.php" target="_blank"  >Formulario</a>
  <br> <hr>
    
  </body>
  </html>

</body>
</html>