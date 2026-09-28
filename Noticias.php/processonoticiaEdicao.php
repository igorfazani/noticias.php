<?php
require_once 'init.php';
 
$_SESSION['noticias'][$_POST['id']]=$_POST;
 
header('Location: PaginaNoticias.php');
exit;
 

 