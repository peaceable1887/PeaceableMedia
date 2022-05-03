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
        <title>P-Media</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/globalColor.css" media="screen">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/startseite.css" media="screen">
        <link rel="stylesheet" href="css/media.css" media="screen">
        <link rel="stylesheet" href="css/slider.css" media="screen">
        <link rel="stylesheet" href="css/aboutMe.css" media="screen">
        <link rel="stylesheet" href="css/contact.css" media="screen ">
    </head>
<body>
<header>
    <!-- Menü -->
    <section id="startseite" data-anchor="Startseite"></section>
    <?php include("menu.php");?>
</header>
<main>
    <!-- Seitenabfrage -->
    <?php include("sites.php");?>
    <section id="media" data-anchor="Media"></section>
    <?php include("media.php");?>

    <section id="aboutMe" data-anchor="Über Mich"></section>
    <?php include("aboutMe.php");?>

    <section id="contact" data-anchor="Kontakt"></section>
    <?php include("contact.php");?>

</main>
    <!--Footer -->
    <?php include("footer.php");?>
</body>
    <script type="text/javascript" src="javascript/slider.js"></script>
    <script type="text/javascript" src="javascript/zoomOutScrolling.js"></script>
    <script type="text/javascript" src="javascript/menuActive.js"></script>

   
</html>