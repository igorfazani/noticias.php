<?php require_once('init.php');
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="color:darkgoldenrod">Formulario</title>
</head>
<body style="background-color:dodgerblue">
    <h1 style="border: 5px solid rgba(0, 0, 0, 1); padding: 10px; margin-bottom: 20px; margin-top: 8px; width: fit-content; border-radius: 80px; background-color:  rgba(255, 255, 255, 1);"><?php print $nomeSite ?></h1>
    <?php require_once 'nav.php'; ?>
    <h2>--------Formulario--------</h2>
    <form action="processonoticia.php" method="POST" style="border: 5px solid; width: fit-content; border-radius: 10px;" >
        <label for="titulo">titulo:</label>  <!-- Oq vai aparecer antes do imput  e o "for" é "para" em ingles-->
        <input type="text" id="titulo" name="titulo" placeholder="Escreva o titulo da noticia" required > <!-- O "id" é o identificador. o "name=" vai salvar o valor escrito pelo usuario em algum lugar no banco de dados. o "required" faz com que o campo seja obrigatorio -->
        <!--  <button type="submit">Enviar</button> -->
        <br>
        <label for="descricao">descrição:</label>
        <input type="decricao" id="descricao" name="descricao" placeholder="conteudo da noticia" required>
        <br>
        <label for="">Foto</label>
        <input type="text" id="imagem" name="imagem" placeholder="Insira a imagem">
        <br>
        <button type="submit">Enviar</button> </p>
