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
        <meta charset="UTF-8">
        <title>P-Media</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/globalColor.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/startseite.css">
        <link rel="stylesheet" href="../css/media.css">
        <link rel="stylesheet" href="../css/slider.css">
        <link rel="stylesheet" href="../css/aboutMe.css">
        <link rel="stylesheet" href="../css/contact.css">
    </head>
<body>
<header>
    <!-- Menü -->
        <div id="startseite"></div>
        <?php include("../php/menu.php");?>
</header>
<main>
    <!-- Seitenabfrage -->
    <?php include("../php/sites.php");?>
    <div id="media"></div>
        <?php include("../php/media.php");?>

    <div id="aboutMe"></div>
        <?php include("../php/aboutMe.php");?>

    <div id="contact"></div>
        <?php include("../php/contact.php");?>

</main>
    <!--Footer -->
    <?php include("../php/footer.php");?>
</body>
    <script type="text/javascript" src="../javascript/slider.js"></script>
    <script type="text/javascript" src="../javascript/zoomOutScrolling.js"></script>
</html>