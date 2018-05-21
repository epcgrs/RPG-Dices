<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Emmanuel Pires">
    <meta name="description" content="Gerador de dados RPG, Gere até 100 dados de um tipo: D4, D6, D8, D10, D12, D20.">
    <meta name="theme-color" content="#c13b1d">
    <meta name="keywords" content="RPG,rpg,dice,dado,dados,dados rpg, rpg dices">
    <title>Dados RPG</title>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="javascript/app.js"></script>
    
    <!-- STYLES -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link href="style/app.css" rel="stylesheet" type="text/css">
    <link href="style/animate.css" rel="stylesheet" type="text/css">
    
    
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">

</head>
<body>
    <!-- LOADER -->
    <div class="loader">
        <p>Carregando...</p>
        <img src="images/dice-load.png" class="bounce animated" alt="DICE">
    </div>
    
    <!-- Menu -->
    <div class="w3-bar w3-black">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="dices.php" class="w3-bar-item w3-button">Dado RPG</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Documentos</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="https://brasilescola.uol.com.br/curiosidades/rpg.htm" class="w3-bar-item w3-button" target="_blank">O que é RPG?</a>
            </div>
        </div>
    </div> 