<?php
    if(isset($_GET["_ijt"]))
    {
        $section = $_GET["_ijt"];
    }else
    {
        $section = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="wWBbi-85L9t8nkCSYHZ4MrFRQXFB0cYVGtg461TKNLU" />
        <meta name="description" content="Als begeisterter Entwickler und Designer zeige ich auf dieser Webseite eine Vielzahl meiner Projekte, 
        darunter bereits abgeschlossene Anwendungen, laufende Projekte und Designkonzepte für Webseiten, mobile Anwendungen und Flyer.">
        <meta name="author" content="Felix Hansmann">
        <title>Felix Hansmann - Entwickler und Designer aus Hamburg</title>
        <link rel="icon" type="image/x-icon" href="images/Logo_32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="images/Logo_48x48.png" sizes="48x48">
        <link rel="icon" type="image/png" href="images/Logo_192x192.png" sizes="192x192">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/globalColor.css" media="screen">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/slider.css" media="screen">
        <link rel="stylesheet" href="css/menu.css" media="screen">
        <link rel="stylesheet" href="css/footer.css" media="screen ">
        <link rel="stylesheet" href="css/home.css" media="screen">
        <link rel="stylesheet" href="css/projects.css" media="screen">
        <link rel="stylesheet" href="css/project_detail_view.css" media="screen">
        <link rel="stylesheet" href="css/aboutMe.css" media="screen">
        <link rel="stylesheet" href="css/impressum.css" media="screen">
        <link rel="stylesheet" href="css/animatedBackground.css" media="screen">
        <link rel="stylesheet" href="css/transitionPageEffect.css" media="screen">
        <!--<link rel="stylesheet" href="css/scrollAnimations.css" media="screen">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
<header>
    <!-- Menü -->
    <?php include("menu.php");?>
</header>