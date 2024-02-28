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
        <title>Peaceable-Media</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <link rel="icon" href="images/PMedia-Logo.png">
        <link rel="stylesheet" href="css/globalColor.css" media="screen">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/startseite.css" media="screen">
        <link rel="stylesheet" href="css/media.css" media="screen">
        <link rel="stylesheet" href="css/slider.css" media="screen">
        <link rel="stylesheet" href="css/aboutMe.css" media="screen">
        <link rel="stylesheet" href="css/footer.css" media="screen ">
        <link rel="stylesheet" href="css/topPresentation.css" media="screen">
        <link rel="stylesheet" href="css/projects.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
<header>
    <!-- Menü -->
    
    <?php include("menu.php");?>
</header>
<main>
    <!-- Seitenabfrage -->
    <?php include("sites.php"); ?>

    <section id="home" data-anchor="home"></section>
    <?php include("home.php");?>

    <section id="projects" data-anchor="projects"></section>
    <?php include("projects.php");?>

</main>
    <!--Footer -->
    <section id="contact" data-anchor="contact"></section>
    <?php include("footer.php");?>
</body>
    <script type="text/javascript" src="javascript/resizeScrollFunctions.js"></script>
    <script type="text/javascript" src="javascript/menuActive.js"></script>
    <script type="text/javascript" src="javascript/burgerMenu.js"></script>
</html>