<?php 
    include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Riot</title>
    <!--ESTILO DO PROJETO -->
    <link rel="stylesheet" href=" <?=$BASE_URL ?>/css/styles.css">
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <a href="<? $BASE_URL ?>" id="logo">
    <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Meu blog">
</a>

<ul>
    <li><a href="<?= $BASE_URL ?>">Home</a></li>
    <li><a href="#">Categorias</a></li>
    <li><a href="#">Home</a></li>
    <li><a href="<?= $BASE_URL ?>contato.php">Contato</a></li>
</ul>
    </header>    
