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
    <div id="menu">
        <?php include("../php/menu.php");?>
    </div>
</header>
<main>
    <!-- Seitenabfrage -->
    <?php include("../php/sites.php");?>
</main>
    <!--Footer -->
    <?php include("../php/footer.php");?>
</body>
    <script type="text/javascript" src="../javascript/slider.js"></script>
</html>