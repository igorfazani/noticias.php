<?php
require_once __DIR__ . "/PaginaNoticias.php";
$id = null;
$noticiaAtual = null;

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $noticiaAtual = $_SESSION['noticias'][$id];
}
?>

<html>
    <head>  </head>

        <body>
            <h1> <?php echo $nomeSite; ?> - Edição</h1>
       <?php require_once __DIR__ . "/nav.php"; ?> 

        <ul>
            <?php foreach($_SESSION['noticias'] as $chaveNoticia => $noticia): ?>
                <li>
                    <a href="edicao.php?id=<?= $chaveNoticia ?>"> 
                        <?= $noticia['titulo'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>

        <?php if($id == null): ?>
            <p>Selecione uma das noticias acima</p>
        <?php else: ?>
            <form action="processonoticiaEdicao.php" method="POST" style="border: 5px solid; width: fit-content; border-radius: 10px;" >
                <input type="text" name="id" id="id" value="<?=$id ?>" hidden>
                <label for="titulo">titulo:</label>   
                <input type="text" id="titulo" name="titulo" placeholder="Escreva o titulo da noticia" required value="<?=$noticiaAtual['titulo']; ?>">  
                <br>
                <label for="descricao">descrição:</label>
                <input type="decricao" id="descricao" name="descricao" placeholder="conteudo da noticia" required value="<?=$noticiaAtual['descricao']; ?>">
                <br>
                <label for="">Foto</label>
                <input type="text" id="imagem" name="imagem" placeholder="Insira a imagem" value="<?=$noticiaAtual['imagem']; ?>">
                <br>
                <button type="submit">Enviar</button> </p> 
            <?php endif ?> </form>
 </body>
</html>