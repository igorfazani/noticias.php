<?php
    require_once __DIR__ . 'PaginaNoticias';
    $id = null;
    $noticiaAtual = null;
    
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
        $id = $_GET["id"];
        $noticiaAtual = $_SESSION["noticias"][$id];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Notícia</title>
</head>
<body>
    <ul>
        <?php foreach($_SESSION["noticias"] as $noticiaChave => $noticia): ?>
            <li>
                <a href="delete.php?id=<?= $noticiaChave ?>">
                      <?= $noticia["titulo"] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php if ($id == null): ?>
        <p>Selecione uma notícia para deletar.</p>
    <?php else: ?>
        <form action="processardelete.php" method="GET">
            <input type="text" name="id" value="<?= $id ?>" hidden>
            <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" value="<?= $noticiaAtual["titulo"] ?>" disabled>
                <br>
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" value="<?= $noticiaAtual["descricao"] ?>" disabled>
                <br>
                <label for="imagem">URL da Imagem:</label>
                <input type="text" id="imagem" name="imagem" value="<?= $noticiaAtual["imagem"] ?>" disabled>
                <br>
                <label for="fonte">Fonte:</label>
                <input type="text" id="fonte" name="fonte" value="<?= $noticiaAtual["fonte"] ?>" disabled>
            <input type="submit" value="Deletar">
        </form>
    <?php endif; ?>
</body>
</html>
 
