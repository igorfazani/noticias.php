
<?php
session_start();

$nomeSite ='NotiSenai';

if(!isset($_SESSION['noticias'])) {
$_SESSION['noticias'] = [ 
          [  
        'titulo' =>'Yuri Alberto pode voltar a treinar "',    
            'descricao' =>'Nesta quarta, o camisa 9 fará um ultrassom para verificar se a lesão está totalmente cicatrizada ou se ainda há alguma alteração..',
            'imagem' => 'Imagens\246693.avif'
          ]
          ]; }
          
          ?>
          <!DOCTYPE html>
          <html lang="pt-BR">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Init noticia</title>
          </head>
          <body>
            
          </body>
          </html>

      