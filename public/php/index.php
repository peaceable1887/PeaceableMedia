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
    <link rel="stylesheet" href="../css/globalColor.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <!-- Menü -->
    <div id="menu">
        <?php include("../php/menu.php");?>
    </div>
</header>

<main>
    <!-- Seitenabfrage (sites.php) -->
    <?php include("../php/sites.php");?>
</main>
    <!--Footer -->
    <?php include("../php/footer.php");?>
</body>
<script type="text/javascript" src="../javascript/slider.js"></script>
</html>